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


  public function saveLoginInfo($loginInfo, $userdata, $agent)
    {  

        // print_r($userdata);
        $uniid = $userdata[0]->uniid;
          $ip = $_SERVER['REMOTE_ADDR'];

            $builder = $this->db->table("login_activity");

        $data = [
            "uniid" => $uniid,
            "agent" => $agent,
            "ip" => $ip,
            "login_time" => date('Y-m-d h:i:s'),
        ];

  return $builder->insert($data);




    }






   
}


