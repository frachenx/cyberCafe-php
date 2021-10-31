<?php
require_once("classes/user.php");
require_once("classes/computer.php");

if (isset($_POST['remark']) && isset($_POST['fee']) && isset($_POST['status'])){
    $user= User::fromID($_GET['id']);
    $user->checkOut($_POST['remark'],$_POST['fee'],$_POST['status']);
    redirect("manage-active-users.php");
    // header("Location: ../manage-active-users.php");
}
$user = user::fromID($_GET['id']);


function getStatus(){
    if ($GLOBALS['user']->status == ""){
        echo("Not Updated Yet");
    }
}

function getComputerName(){
    $compID  = $GLOBALS['user']->computer;
    $computer = computer::withID($compID);
    echo $computer->getName();
}

function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

function getForm(){
    $user= User::fromID($_GET['id']);
    if($user->status === "CHECKED OUT"){
        echo ('
            <table class="table table-bordered">
                <tr>
                    <td><strong>Remark</strong></td>
                    <td>'.$user->remark.'</td>
                </tr>

                <tr>
                    <td><strong>Out Time</strong></td>
                    <td>'.$user->outTime.'</td>
                </tr>

                <tr>
                    <td><strong>Fees</strong></td>
                    <td>'.$user->fee.'</td>
                </tr>
            </table>
        ');
    }else{
        echo('
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Remark</label>
                    <textarea class="form-control" name="remark" id="remark" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Fees</label>
                    <input type="number" class="form-control" name="fee" id="fee">
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="CHECKED OUT">CHECK OUT</option>
                    </select>
                </div>

                <div class="form-group">
                    <input id="submit" class="btn btn-primary btn-block" type="submit" value ="Update">
                </div>
            </form>
        ');
    }
}

