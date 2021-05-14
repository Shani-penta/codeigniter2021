<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\UsersModel;
class Data extends Controller
{
	public function index()
	{
         $userModel = new UsersModel();
      //  $userModel = new \App\Models\UsersModel();

        $data['subjects']= $userModel->getData();
        // print_r($data['subjects']);
        return view('dataview', $data);
	}
    public function userslist()
	{
        $userModel = new UsersModel();
        $data['users']=$userModel->getUsersList();
        return view('userlist_view', $data);
    }

}