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
    //  print_r($this->request->getMethod());
        if($this->request->getMethod() == 'post') {
			echo "ssss";
            $rules =[
                
                'email' => 'required|valid_email',
              'password' => 'required',
               
            ];
			
			 if($this->validate($rules))
            {
				
				$email = $this->request->getVar('email');  
               $password = $this->request->getVar('password');
		//echo $email;
                $userdata = $this->loginModel->verifyEmail($email);

							//	 print_r($userdata);
//echo "te";
			    if($userdata) {
               // echo "test";
				// print_r($userdata);
				// echo $userdata['username'];  //in array
				// $userdata[0]->password; //in object in an array
                $pass = $userdata[0]->password;
             $agent = $this->getUserAgentInfo();

			//	echo $password; echo '--'; echo $pass;  echo '--';
			//	echo md5($password);
				  if(password_verify($password, $pass)){
                   // echo "ddddd";
				 $uniid = $userdata[0]->uniid;
					 if($userdata[0]->status == 'active') {
						  $logininfo = [
						'uniid' => $uniid,
						'agent' => $agent,
						'ip'  => $this->request->getIPAddress(),
						'login_time' => date('Y-m-d h:i:s'),
					];
						// print_r($logininfo);

                    // echo "ddddd333"; 
					// echo $userdata[0]->uniid;
					 $la_id = $this->loginModel->saveLoginInfo($loginInfo);
					 	if($la_id) {
					 $this->session->set('logged_info', $la_id);
					}
					//  exit();
					// $this->session->set($logininfo, $userdata[0]->uniid);
					 $this->session->set('logged_user', $userdata[0]->uniid);
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
		//  echo "dd";
		return view('login_view',$data);

	}
	public function getUserAgentInfo()
	{
		$agent =$this->request->getUserAgent();
		if($agent->isBrowser())
		{
			$currentAgent =$agent->getBrowser();
		}
		elseif($agent->isRobot())
		{
			$currentAgent = $this->agent->robot();

		}
		elseif ($agent->isMobile())
		{
			$currentAgent = $agent->getMobile();
		}
		else
		{
			$currentAgent = 'Unidentified User Agent';
		}
		return $currentAgent;
	}
}