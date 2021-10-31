<?php

require_once("classes/user.php");
require_once("classes/computer.php");
if (isset($_POST['userName']) && isset($_POST['userAddress']) && isset($_POST['userNumber']) && isset($_POST['userEmail']) && isset($_POST['compName']) && isset($_POST['IdProof'])){
    $user = new User();
    $user->name=$_POST['userName'];
    $user->address = $_POST['userAddress'];
    $user->number = $_POST['userNumber'];
    $user->email = $_POST['userEmail'];
    $user->computer = $_POST['compName'];
    $user->idProof = $_POST['IdProof'];
    $timeIn = date("Y-m-d h:i:s");
    $user->inTime=$timeIn;
    $user->addUser();
}

    // GET ALL COMPUTERS/COMPUTER_ID
function GetComputerNames(){
    $computer = Computer::newComputer("","","");
    $computersArray = $computer->getAllComputers();
    if (mysqli_num_rows($computersArray)>0){
        while($row = mysqli_fetch_array($computersArray)){
            echo '
                <option value="'.$row['computer_id'].'">'.$row['computer_name'].' </option> 
            ';

        }   
    }
}
