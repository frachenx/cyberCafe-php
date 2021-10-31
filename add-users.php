<?php require_once("header.php")?>
<?php require_once("includes/addUser.php")?>

    <div class="mx-5">
        <h3>ADD USER</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="">User Name</label>
                <input name="userName" id="userName" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="">User Address</label>
                <input name="userAddress" id="userAddress" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="">Mobile Number</label>
                <input class="form-control" name="userNumber" id="userNumber" type="tel">
            </div>

            <div class="form-group">
                <label for="">User Email</label>
                <input name="userEmail" id="userEmail" class="form-control" type="email">
            </div>

            <div class="form-group">
                <label for="">Computer Name</label>
                <select name="compName" id="compName" class="form-control">
                    <option value="">Choose A Computer</option>
                    <?php GetComputerNames() ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">ID Proof</label>
                <input type="text" name="IdProof" id="IdProof" class="form-control"> 
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Add">
            </div>
        </form>
    </div>

<?php require_once("footer.php")?>