<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\DashboardModel;

class Dashboard extends Controller
{	
	public $dModel;

    public function __construct() {
		 $this->dModel = new DashboardModel();
    }
     public function index()
	{
  
        if(!session()->has('logged_user')){
       return redirect()->to(base_url()."/login");
        }
        $uniid = session()->get('logged_user');
        // echo $uniid;        

        // $userdata = $this->dModel->getLoggedInUserData($uniid);
        $data['userdata'] = $this->dModel->getLoggedInUserData($uniid);
        // echo "sss";
         print_r($userdata);
       return view('dashboard_view',$data);
    }
    public function logout()
	{
       session()->remove('logged_user');
       session()->destroy();
       return redirect()->to(base_url()."/login");
    }
}

