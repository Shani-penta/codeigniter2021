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
       
        if(count($result) == 1){
            return $result;
        }
        else{
            return false;
        }
   
    }


  public function saveLoginInfo($loginInfo)
    {  


            $builder = $this->db->table("login_activity");


            echo "tewwwwsdddt";
        print_r($userdata);
        print_r($loginInfo);
        $data = [
            "uniid" => "User 1",
            "agent" => "user1@gmail.com",
            "ip" => "8888888888",
            "login_time" => date('Y-m-d h:i:s'),
        ];

  return $builder->insert($data);




    }







   
}


