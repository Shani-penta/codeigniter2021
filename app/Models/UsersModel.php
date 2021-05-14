<?php 
namespace App\Models;
use CodeIgniter\Model;
class UsersModel extends Model
{
    public function getData()
    {
        $subjects =[
            ['subject' =>'html', 'abbr' =>'hyper'],
            ['subject' =>'html2', 'abbr' =>'hyper2'],
            ['subject' =>'html3', 'abbr' =>'hyper3'],

        ];
        return $subjects;
    }
    public function getUsersList()
    {
        $db =\config\Database::connect();
        $query = $db->query('select id,username,email,mobile from users');
        $result = $query->getResult();
        if(count($result)>0)
        {
            return $result;
        }
        else{
            echo "no";
        }
    }
}