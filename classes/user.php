<?php
require_once("database.php");
class User extends database{
    public $userID, $name, $address,$number,$email,$computer,$idProof,$inTime,$outTime,$status,$fee,$remark;
     
    public static function fromID($id){
        $instance = new self();
        $instance->newFromID($id);
        return $instance;
    }

    protected function newFromID($id){
        $SQL = "SELECT * FROM USERS WHERE user_id='".$id."'";
        $conn = $this->connect();
        $result =  mysqli_query($conn,$SQL);
        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            $this->name= $row['user_name'];
            $this->address= $row['user_address'];
            $this->number= $row['user_number'];
            $this->email= $row['user_email'];
            $this->computer= $row['computer_id'];
            $this->idProof= $row['user_id_proof'];
            $this->inTime= $row['user_in_time'];
            $this->outTime= $row['user_out_time'];
            $this->status= $row['user_status'];
            $this->fee= $row['user_fee'];
            $this->remark= $row['user_remark'];
            $this->userID = $row['user_id'];
        }
    }

    public static function getActiveUsers(){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT user_id,user_id_proof as EntryID,user_name as FullName FROM USERS WHERE user_status != 'CHECKED OUT'";
        $result = mysqli_query($conn,$SQL);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_array($result)){
                echo'
                    <tr>
                        <td>'.$i.'</td>
                        <td>'.$row['EntryID'].'</td>
                        <td>'.$row['FullName'].'</td>
                        <td>
                            <a class="btn btn-primary" href="view-user-detail.php?id='.$row['user_id'].'"  ><i class="far fa-eye"></i></a>
                        </td>
                    </tr>
                ';
                $i++;
            }
        }
    }

    public static function getArchivedUsers(){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT user_id,user_id_proof as EntryID,user_name as FullName FROM USERS WHERE user_status = 'CHECKED OUT'";
        $result = mysqli_query($conn,$SQL);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_array($result)){
                echo'
                    <tr>
                        <td>'.$i.'</td>
                        <td>'.$row['EntryID'].'</td>
                        <td>'.$row['FullName'].'</td>
                        <td>
                            <a class="btn btn-primary" href="view-user-detail.php?id='.$row['user_id'].'"  ><i class="far fa-eye"></i></a>
                        </td>
                    </tr>
                ';
                $i++;
            }
        }
    }


    public static function getUser($userName){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT user_id,user_id_proof as EntryID,user_name as FullName FROM USERS WHERE user_name LIKE '".$userName."%'" ;
        $result = mysqli_query($conn,$SQL);
        if(mysqli_num_rows($result)>0){
            $json = array();

            $i=1;
            while($row = mysqli_fetch_array($result)){
                $json[] = array(
                    "count" =>$i,
                    "id" => $row['EntryID'],
                    "name" => $row['FullName'],
                    "userID" => $row['user_id']
                );
                // echo'
                //     <tr>
                //         <td>'.$i.'</td>
                //         <td>'.$row['EntryID'].'</td>
                //         <td>'.$row['FullName'].'</td>
                //         <td>
                //             <a class="btn btn-primary" href="view-user-detail.php?id='.$row['user_id'].'"  ><i class="far fa-eye"></i></a>
                //         </td>
                //     </tr>
                // ';
                $i++;

            }
            $jsonString = json_encode($json);
            echo $jsonString;
        }
    }

    public function __construct()
    {
        
    }

    public function addUser(){
        $conn = $this->connect();
        $SQL = "INSERT INTO USERS (user_name,user_address,user_number,user_email,computer_id,user_id_proof,user_in_time,user_out_time,user_status,user_fee,user_remark) VALUES('".$this->name."','".$this->address."','".$this->number."','".$this->email."','".$this->computer."','".$this->idProof."','".$this->inTime."','".$this->outTime."','".$this->status."','".$this->fee."','".$this->remark."')";
        mysqli_query($conn,$SQL);
    }

    public function updateUser(){

    }

    public function checkOut($remark,$fee,$status){
        $conn = $this->connect();
        $SQL = "UPDATE USERS SET user_remark='".$remark."', user_fee='".$fee."',user_status='".$status."', user_out_time='".date("Y-m-d h:i:s")."'  WHERE user_id='".$this->userID."'";
        mysqli_query($conn,$SQL);
    }
}