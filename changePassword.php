<?php require_once("header.php") ?>

<?php
    $conn = mysqli_connect("localhost","root","","cyberCafe");
    if(isset($_POST['currentPassword']) && isset($_POST['currentPassword']) && isset($_POST['currentPassword'])){
        $currentPwd = $_POST['currentPassword'];
        $pwd = $_POST['password'];
        $SQL = "SELECT admin_password FROM admin WHERE admin_id=1";
        $result = mysqli_query($conn,$SQL);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            if(password_verify($currentPwd,$row['admin_password'])){
                $SQL= "UPDATE ADMIN SET admin_password='" . $pwd ."' WHERE admin_id=1";
                $result = mysqli_query($conn,$SQL);
            }else{echo "<script> alert(Current password incorrect); </script>";}
        }
    }
?>

<div class="mx-5">
    <h3>CHANGE PASSWORD</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <input class="form-control" name="currentPassword" id="currentPassword" type="password">
        </div>

        <div class="form-group">
            <label for="password">New Password</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input class="form-control" name="confirmPassword" id="confirmPassword" type="password">
        </div>

        <div class="form-group">
            <input id="btnPass" class="btn btn-primary btn-block" type="submit" value = "Change Password">
        </div>
    </form>
</div>

<script>
    document.getElementById("btnPass").addEventListener("click",function(e){
        var newPassword = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        console.log(newPassword + " - " + confirmPassword);
        if (newPassword === confirmPassword){

        }else{alert("New password and confirm passwords need to be the same");e.preventDefault();}
    })
    

</script>
<?php require_once("footer.php") ?>