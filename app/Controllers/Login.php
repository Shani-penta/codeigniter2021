<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
	public $loginModel;
	public $session;

    public function __construct() {
        helper("form");
		$this->loginModel = new LoginModel();
		$this->session = session();

    }
	public function index()
	{
		   $data = [];
     
        if($this->request->getMethod() == 'post') {
            $rules =[
                
                'email' => 'required|valid_email',
              'password' => 'required',
               
            ];
			
			 if($this->validate($rules))
            {
				
				$email = $this->request->getVar('email');  
               $password = $this->request->getVar('password');
		
                $userdata = $this->loginModel->verifyEmail($email);

								// print_r($userdata);

			    if($userdata) {
                // echo "test";
				// print_r($userdata);
				// echo $userdata['username'];  //in array
				// $userdata[0]->password; //in object in an array
                $pass = $userdata[0]->password;

			//	echo $password; echo '--'; echo $pass;  echo '--';
			//	echo md5($password);
				  if(password_verify($password, $pass)){
                   // echo "ddddd";
					 if($userdata[0]->status == 'active') {
                    // echo "ddddd333"; 
					echo $userdata[0]->uniid;
					 $this->session->set('logged_user', $userdata[0]->uniid);
					//  $this->session->set('logged_user', $userdata['uniid']);
					 return redirect()->to(base_url().'/dashboard');
					 }
					 else {
                    $this->session->setTempdata('error', 'Please activate account',3);
					return redirect()->to(current_url());					 }
				  } else { 

					$this->session->setTempdata('error', 'Sorry! wrong password',3);
					return redirect()->to(current_url());  
				  }
				}else{
					
					$this->session->setTempdata('error', 'Sorry!!!! email does not exsist',3);
					return redirect()->to(current_url());

				}
			}
			else {
			$data['validation'] =$this->validator; 

			}
		}
		// echo "ddddddddddddddddd";
		return view('login_view',$data);

	}
}