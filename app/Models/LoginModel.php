<?php 
namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model
{
    public function verifyEmail($email)
    {
       //  $db = \Config\Database::connect();
        $builder = $this->db->table('users');
        //$builder->select("uniid,status,username,password");
      //  $builder->where('email',$email);
       $sql = $builder->getWhere(['email' => $email]);
        $result = $sql->getResult();
        //   $result = $sql->getResult();
                // echo $email;

        // $result = $builder->get();
    //    print_r($result);

        // if(count($result) == 1){
        //     return $result->getRowArray();
        // }
        // else{
        //     return false;
        // }
        if(count($result) == 1){
            return $result;
        }
        else{
            return false;
        }
   
    }
}