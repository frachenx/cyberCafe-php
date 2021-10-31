<?php require_once("header.php") ?>
<?php require_once("includes/addComputer.php")?>
    <div class="mx-5">
        <h3>ADD COMPUTER</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="compName">Computer Name</label>
                <input name="compName" id="compName" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="compLocation">Computer Location</label>
                <input name="compLocation" id="compLocation" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="compAddress">IP ADDRESS</label>
                <input name="compAddress" id="compAddress" class="form-control" type="text">
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Add">
            </div>
        </form>
    </div>
<?php require_once("footer.php") ?>