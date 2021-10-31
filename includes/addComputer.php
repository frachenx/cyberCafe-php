<?php
    require_once("classes/computer.php");
    if(isset($_POST['compName']) && isset($_POST['compLocation']) && isset($_POST['compAddress'])){
        $compName =$_POST['compName'];
        $compLocation = $_POST['compLocation'];
        $compAddress = $_POST['compAddress'];
        $computer = Computer::newComputer($compName,$compLocation,$compAddress);
        // $computer =  new Computer($compName,$compLocation,$compAddress);
        // echo $computer->getName() . "<br> ";
        // echo $computer->getLocation() . "<br> ";
        // echo $computer->getIpAddress() . "<br> ";
        $computer->addComputer();
    }