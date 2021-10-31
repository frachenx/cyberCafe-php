
<?php
require_once("database.php");
class Computer extends database
{
    private $name, $location, $ipAddress;

    public static function withID($id){
        $instance = new self();
        $instance-> loadByID($id);
        return $instance;
    }

    protected function loadByID($id){
        $SQL = "SELECT * FROM COMPUTERS WHERE computer_id='".$id."'";
        $result = mysqli_query($this->connect(),$SQL);
        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            $this->name = $row['computer_name'];
            $this->location = $row['computer_location'];
            $this->ipAddress = $row['computer_ip'];
        }
    }

    protected function loadNewComputer($mName, $mLocation, $mIpAddress){
        $this->name = $mName;
        $this->location = $mLocation;
        $this->ipAddress = $mIpAddress;
    }

    public static function newComputer($mName, $mLocation, $mIpAddress){
        $instance = new self();
        $instance->loadNewComputer($mName,$mLocation,$mIpAddress);
        return $instance;
    }

    public function __construct()
    {
        
    }

    public function getName()
    {
        return $this->name;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function addComputer()
    {
        $SQL = "INSERT INTO COMPUTERS (computer_name,computer_location,computer_ip) VALUES('".$this->name . "', '". $this->location. "' , '". $this->ipAddress. "')";
        mysqli_query($this->connect(),$SQL);
    }

    public function updateComputer($id,$mName,$mLocation,$mIpAddress){
        $SQL = "UPDATE COMPUTERS SET computer_name='".$mName."',computer_location='".$mLocation."',computer_ip='".$mIpAddress."'  WHERE computer_id='" . $id . "' ";
        mysqli_query($this->connect(),$SQL);
        // echo $SQL;
    }

    public function getAllComputers(){
        $SQL  = "SELECT * FROM COMPUTERS";
        $result = mysqli_query($this->connect(),$SQL);
        return $result;
    }


}
