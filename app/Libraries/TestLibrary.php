<?php 
namespace App\Libraries;
// use  App\Model\AutoModel;
use \CodeIgniter\HTTP\URI;
class TestLibrary
{
    public $db;
    public $am;
    public $email;
    public $uri;
public function __construct() {
$this->db = \Config\Database::connect();

$this->uri = new URI(current_url());
}
public function getData() {
    //    return 'Welcome to custom Library';
    // return $this->db->query('select * from employees')->getResultArray();
    // return $this->am->find(1);
    return $this->uri->getHost();
    // print_r($data);
    // return $data;
}
public function displayData() {
    return "Display Data";
}
}