<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Users extends Controller
{
	public function index()
	{
	$db1 =\Config\Database::connect();
    $db2 =\Config\Database::connect("seconddb");
    // print_r($db);
    $query = $db1->query('select username,email,mobile from users');
    $result = $query->getResult();
    echo "<pre>";
    print_r($result);

    $query2 = $db2->query('select user_login,user_email,user_nicename  from wp_users');
    $result2 = $query2->getResult();
    print_r($result2);
	}

    
}