<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\View\Table;
class Testmail extends Controller
{
	public function index()
	{
		
       // echo "sxxxxxxxxxxxx";
        $to =  'shanipenta@gmail.com';
        $subject = "Email sending";
        $message = 'Hi thanks, for your test mail';
        $email =\Config\Services::email();
        $email->setTo($to);
        $email->setFrom('shanimolschikku@gmail.com', 'test');
        $email->setSubject($subject);
        $email->setMessage($message);
        $filepath ='public/assets/images/logo.jpg';
        $email->attach($filepath);
        if($email->send())
        {
            echo "sucess";
        }
        else{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        
	}
    public function verify()
            {
                echo "account verified";
            }
}