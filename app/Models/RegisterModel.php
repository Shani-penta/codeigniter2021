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
          $sql =$builder->getWhere(['uniid' => $id]);
          $result = $sql->getResult();
        //   print_r($result);
        //    $builder->where('uniid',$id);  

        // $builder->where('uniid',$id);  
        // $result = $builder->get();
        
        if(count($result) == 1){
            return $result;
        }
        else{
            return false;
        }
    }

        public function updateStatus($uniid){
          $builder = $this->db->table('users');
          $builder->set('status', 'active');   
          $builder->where('uniid',$uniid); 
          $builder->update();
           if($this->db->affectedRows() == 1){
            return true;
        }
        else{
            return false;
        }
        }

}