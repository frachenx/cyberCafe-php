<?php require_once("header.php") ?>
<?php require_once("includes/admin.php") ?>

<div class="mx-5" id="profile">
    <h3>ADMIN PROFILE</h3>
    <?php //$adminObj = new admin();  ?>
    
    <form action="" method="POST">
        <div class="form-group">
            <label class="d-block" for="adminName">Admin Name</label>
            <input value="<?php echo $adminObj->adminName ?>" class="form-control" type="text" name="adminName" id="adminName" placeholder="Enter Admin Name">
        </div>

        <div class="form-group">
            <label class="d-block" for="adminUser">User Name</label>
            <input value="<?php echo $adminObj->adminUser ?>" class="form-control" type="text" name="adminUser" id="adminUser" placeholder="Enter User Name">
        </div>

        <div class="form-group">
            <label for="contactNum" class="d-block text-light">Contact Number</label>
            <input value="<?php echo $adminObj->contactNumber ?>" type="tel" name ="contactNum" id ="contactNum" class="form-control" placeholder="Enter contact Number">
        </div>

        <div class="form-group">
            <label for="email" class="d-block">Email</label>
            <input value="<?php echo $adminObj->email ?>" type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Update" name="submit" id="submit">
        </div>
    </form>
</div>

<?php require_once("footer.php") ?>