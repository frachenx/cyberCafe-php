<?php
require_once("classes/user.php");
function getUsers(){
    user::getArchivedUsers();
}