<?php
require_once("classes/computer.php");
$computer = new Computer();
if (isset($_GET['id'])){
    $computer = Computer::withID($_GET['id']);
}

if(isset($_POST['compName']) && isset($_POST['compLocation']) && isset($_POST['compIP'])){
    $name = $_POST['compName'];
    $location = $_POST['compLocation'];
    $ip = $_POST['compIP'];

    $computer->updateComputer($_GET['id'],$_POST['compName'],$_POST['compLocation'],$_POST['compIP']);
    $computer = Computer::withID($_GET['id']);
}

