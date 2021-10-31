<?php require_once("header.php") ?>
<?php require_once("includes/viewUserDetail.php") ?>
<div class="mx-5">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td><strong>EntryID</strong></td>
                <td><?php echo $user->idProof ?></td>
            </tr>
            <tr>
                <td><strong>Full Name</strong></td>
                <td><?php echo $user->name ?></td>
            </tr>
            <tr>
                <td><strong>User Address</strong></td>
                <td><?php echo $user->address  ?></td>
            </tr>
            <tr>
                <td><strong>Mobile Number</strong></td>
                <td><?php echo $user->number ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $user->email ?></td>
            </tr>
            <tr>
                <td><strong>Computer Name</strong></td>
                <td><?php getComputerName() ?></td>
            </tr>
            <tr>
                <td><strong>ID Proof</strong></td>
                <td><?php echo $user->idProof ?></td>
            </tr>
            <tr>
                <td><strong>In Time</strong></td>
                <td><?php echo $user->inTime ?></td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td><?php getStatus() ?></td>
            </tr>
        </tbody>
    </table>

    <?php getForm() ?>
    <!-- <form action="" method="post">
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
        </form> -->

    <!-- <table class="table table-bordered">
        <tr>
            <td><strong>Remark</strong></td>
            <td><?php //echo $user->remark ?></td>
        </tr>

        <tr>
            <td><strong>Out Time</strong></td>
            <td><?php //echo $user->outTime ?></td>
        </tr>

        <tr>
            <td><strong>Fees</strong></td>
            <td><?php //echo $user->fee ?></td>
        </tr>
    </table> -->
</div>

<?php require_once("footer.php") ?>