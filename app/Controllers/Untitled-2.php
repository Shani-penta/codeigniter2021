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
        $this->email = $email = \Config\Services::email();
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
                    'name' => $this->request->getVar('uname',FILTER_SANITIZE_STRING),         
                    'email' => $this->request->getVar('email'),   
                    'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),         
                    'mobile' => $this->request->getVar('mobile'),            
                    // 'unnid' =>   $unnid,
                    // 'activation_date'  => date("Y-m-d h:i:s"),         
                         ];
                       if($this->registerModel->createUser($userdata)){
                        $to =  $this->request->getVar('email');
                        $subject = 'Email sending';
                        $message = 'Hi thanks, for your test mail';
                        $email = \Config\Services::email();
                        $this->email->setTo($to);
                        $this->email->setFrom('shanimolschikku@gmail.com', 'test');
                        $this->email->setSubject($subject);
                        $this->email->setMessage($message);
                        $filepath ='public/assets/images/logo.jpg';
                        $this->email->attach($filepath);
                        if($this->email->send())
                        {
                            $session->setTempdata('success', 'Thanks, we will get you soon...', 3);
                            return redirect()->to(current_url());
                            // echo "sucess";
                        }
                        else{
                            $session->setTempdata('error', 'Error', 3);
                 return redirect()->to(current_url());
                        }
                    
                    }
                       else{

                       echo "sadas";
                       $session->setTempdata('error', 'Errror', 3);
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