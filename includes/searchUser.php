<?php
    require_once("../classes/user.php");
    if (isset($_POST['searchWord'])){
        user::getUser($_POST['searchWord']);
    }

