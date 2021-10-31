<?php require_once("header.php") ?>
<?php require_once("includes/editComputer.php")?>
    <div class="mx-5">
        <h3>UPDATE COMPUTER DETAIL</h3>
        <form action="" method="POST">
        <div class="form-group">
                <label for="">Computer Name</label>
                <input name="compName" id="compName" class="form-control" type="text" value="<?php echo $computer->getName() ?>">
            </div>
            <div class="form-group">
                <label for="">Computer Location</label>
                <input name="compLocation" id="compLocation" class="form-control" type="text" value="<?php echo $computer->getLocation() ?>">
            </div>
            <div class="form-group">
                <label for="">Computer IP Address</label>
                <input name="compIP" id="compID" class="form-control" type="text" value="<?php echo $computer->getIpAddress() ?>">
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Update">
            </div>
        </form>

    </div>
<?php require_once("footer.php")?>