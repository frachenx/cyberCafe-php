<?php

require_once("classes/user.php");

function getActiveUsers(){
    User::getActiveUsers();
}