<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Register extends BaseController
{
    public $registerModel;
    public $session;
    public $email;
    public function __construct() {
        helper("form");
        $this->registerModel = new RegisterModel();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }
	public function index()
	{
        $data = [];
        $data['validation'] = null;
        if($this->request->getMethod() == 'post') {
            $rules =[
                'uname' => 'required',
                'password' => 'required',
                'rpassword' => 'required',
                'email' => 'required|valid_email',
                'mobile' => 'required|numeric',
               
            ];
            if($this->validate($rules))
            {
                $unnid =md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time () ));
                $userdata =[
                    'name' =>   $this->request->getVar('uname',FILTER_SANITIZE_STRING),         
                    'email' =>   $this->request->getVar('email'),   
                    'password' =>   password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),         
                    'mobile' =>   $this->request->getVar('mobile'),            
                    'unnid' =>   $unnid,
                    'activation_date'  => date("Y-m-d h:i:s"),         
                         ];
                       if($this->registerModel->createUser($userdata)){
                           echo "dsfdsg";
                    //   $to  = $this->request->getVar('email');
                    //   $subject = 'Register form';
                    //   $message = 'Hi' .$this->request->getVar('uname',FILTER_SANITIZE_STRING).",<br><br>Thanks your account";
                    //   $this->email = \Config\Services::email();
                    //   $this->email->setTo($to);
                    //   $this->email->setFrom('shanipenta@gmail.com');
                    //   $this->email->setSubject($subject);
                    //   $this->email->setMessage($message);
                    //   if($this->email->send()){
                         
                    //       $this->session->setTempdata('success', 'register sucessfully', 3);
                    //       return redirect()->to(current_url());
                    //   }
                    //   else{
                    //     $this->session->setTempdata('error', 'Sorry! Unable to create an account, Try again', 3);
                    //     return redirect()->to(current_url());
                    //     //   $data = $this->email->printDebugger(['headers']);
                    //     //   print_r($data);
                    //   }
                    }
                       else{

                        $this->session->setTempdata('error', 'Sorry! Unable to regisster, Try again', 3);
                 return redirect()->to(current_url());
                       }
            }
            else{
                $data['validation'] =$this->validator; 
            }
        }
		return view('register_view',$data);

	}
}