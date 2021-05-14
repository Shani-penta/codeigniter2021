<?php 
namespace App\Models;
use CodeIgniter\Model;
class RegisterModel extends Model
{
    public function createUser($data)
    {
       //  $db = \Config\Database::connect();
        $builder = $this->db->table('users');
        $res =$builder->insert($data);
        if($this->db->affectedRows() == 1){
            return true;
        }
        else{
            return false;
        }
    // $builder = $db->table('register');
    // $res =$builder->insert($data);
    // if($res->connID->affected_rows() == 1){
    //     return true;
    // }
    // else{
    //     return false;
    // }
    }

    public function verifyUniid($id)
    {
        $builder = $this->db->table('users');
        $builder->select('activation_date,uniid,status');
        $builder->where('uniid',$id);  
        $result = $builder->get();
        if($builder->countAll() == 1){
            return $result->getRow();
        }
        else{
            return false;
        }
    }
}