<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ContactModel;
class Contact extends Controller
{
    public $contactModel;
    public function __construct() {
        helper("form");
        $this->contactModel = new ContactModel();
            }
    public function index()
	{
        $data = [];
        $data['validation'] = null;
        $session = \CodeIgniter\Config\Services::session();
        $rules =[
            'name' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ];
        if($this->request->getMethod() == 'post') {
            if($this->validate($rules))
            {
                $cdata =[
           'name' =>   $this->request->getVar('name',FILTER_SANITIZE_STRING),         
           'email' =>   $this->request->getVar('email',FILTER_SANITIZE_STRING),           
           'phone' =>   $this->request->getVar('phone',FILTER_SANITIZE_STRING),            
           'message' =>   $this->request->getVar('message',FILTER_SANITIZE_STRING),           
                ];
               $status = $this->contactModel->saveData($cdata);
               if($status){
              
                $session->setTempdata('success', 'Thanks, we will get you soon...', 3);
                 return redirect()->to(current_url());
               }else{
               
                $session->setTempdata('error', 'Sorry try again');
                return redirect()->to(current_url());
               }
            }      
        else{  
         $data['validation'] =  $this->validator; 
            }
        }
    return view('contactview',$data);
    }
}