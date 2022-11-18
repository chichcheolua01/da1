<?php
    include '../controller/lib/session.php  ';

    Session::checklogin();
    include '../controller/lib/database.php';
    include '../controller/helpers/format.php';



?>

<?php
  class adminlogin 
  {
  private $db;
  private $fm;

    public function __construct()
    {
        $this-> db = new Database();
        $this-> fm = new Format();
    } 
    public function login_admin($adminuser,$adminpass){
        
        $adminuser = $this->fm->validation($adminuser);
        $adminpass = $this->fm->validation($adminpass);

        $adminuser = mysqli_real_escape_string($this->db->link, $adminuser);
        $adminpass = mysqli_real_escape_string($this->db->link, $adminpass);

        if(empty($adminuser) || empty($adminpass) ){
            $aler = "tài khoản hoặc mật khẩu trống";
            return $aler;
        } else {
            $query = "SELECT * FROM tbl_admin WHERE adminuser = '$adminuser' AND adminpass = '$adminpass'";
            $result = $this->db->select($query);

            if($result != false){
                $value = $result->fetch_assoc();
                Session::set('adminlogin',true);
                Session::set('adminid',$value['adminid']);
                Session::set('adminuser',$value['adminuser']);
                 // session::set('admipass',$value['adminpass']);
                Session::set('adminname',$value['adminname']);

                header('location:index.php');
            }else{
                $aler = "tài khoản hoặc mật khẩu không đúng";
                return $aler;
            }
        }
    }
  }
  
?>