<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{	

    // public $session;
 
 protected $session;


    function __construct()
    {

        $this->session = \CodeIgniter\Config\Services::session();

        $this->session->start();
        // $this->session = session(); 

    }
     public function index()
	{
    //   echo $this->session->get('logged_user');
    // echo "ddd";    
      
        if(!$this->session->has('logged_user')){
       return redirect()->to(base_url()."/login");
   
        }
       return view('dashboard_view');
    }
    public function logout()
	{
       session()->remove('logged_user');
       session()->destroy();
       return redirect()->to(base_url()."/login");
    }
}

















    // public function __construct() {
    //     // parent:: __construct();

	// 	// $this->session = session();

    //     // $this->load->library('session');
    // }
//     public function index()
// 	{        
//         //  $data = [];
//         // $session = \CodeIgniter\Config\Services::session();

//         // echo $this->session->get('logged_user');
//         print_r($this->session->get('logged_user'));
//         if(!session()->has('logged_user')){
//        return redirect()->to(base_url()."/login");
   
//         }
//        return view('dashboard_view');
//     }
//     public function logout()
// 	{
//        session()->remove('logged_user');
//        session()->destroy();
//        return redirect()->to(base_url()."/login");
//     }
// }