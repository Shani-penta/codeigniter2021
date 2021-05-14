<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Form extends Controller
{
    public function __construct() {
helper("form");
    }
	
	public function index()
	{
		//return ("Welcome Blogs");
        $data = [];
      /*  $rules = [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|valid_email',
            'mobile' => 'required|numeric|exact_length[10]',
        ]; */
        $rules = [
            'fname' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'Enter the first name'
                ],
            ],
            'lname' =>  [
                'rules' =>'required',
                'errors' => [
                    'required' => 'Enter the Last name'
                ],
            ],
            'email' =>  [
                'rules' =>'required|valid_email',
                'errors' => [
                    'required' => 'Enter the Email',
                    'valid_email' => 'Enter valid email id'
                ],
            ],
           
            'mobile' =>  [
                'rules' =>'required|numeric|exact_length[10]',
                'errors' => [
                    'required' => 'Enter the Phone number',
                    'numeric' => 'Enter Numbers only',
                    'exact_length'  => 'Enter 10 digits number'
                ],
            ],
        ];
        if($this->request->getMethod() == 'post') {
        if($this->validate($rules))
        {
        echo "Sucess";
        }
        else{
            $data['validation'] =$this->validator; 
        }
    }
        return view("myform",$data);
	}
}