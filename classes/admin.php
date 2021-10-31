<?php 
require_once("database.php");
class admin extends database{
    public $adminName,$adminUser,$contactNumber,$email;
    private $conn ;
    
    public function __construct()
    {
        $this->conn = $this->connect();
        $SQL = "SELECT * FROM ADMIN";
        $result = mysqli_query($this->conn,$SQL);
        if (mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $this->adminName = $row['admin_name'];
            $this->adminUser = $row['admin_user_name'];
            $this->contactNumber = $row['admin_contact_number'];
            $this->email = $row['admin_email'];
        }
    }

    public function updateAdmin($name,$user,$number,$mail){
            $SQL = "UPDATE ADMIN SET admin_name='" . $name . "' ," . "admin_user_name ='" .$user . "' , admin_contact_number='" . $number . "' , admin_email='" . $mail . "' WHERE admin_id=1";
            mysqli_query($this->conn,$SQL);
        
        
    }
   

}