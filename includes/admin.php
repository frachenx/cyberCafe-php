<?php 
    require_once("../cyberCafe/classes/admin.php");

    $adminObj = new admin(); 

    if (isset($_POST['adminName']) && isset($_POST['adminUser']) && isset($_POST['contactNum']) && isset($_POST['email'])){
        $adminObj->updateAdmin($_POST['adminName'],$_POST['adminUser'],$_POST['contactNum'],$_POST['email']);
        $adminObj = new admin(); 
    }
?>
