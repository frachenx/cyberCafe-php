<?php require_once("header.php")?>
<?php require_once("includes/manageActiveUsers.php")?>
    <div class="mx-5">
        <h3>MANAGE ACTIVE USERS</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>EntryID</th>
                    <th>Full Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php getActiveUsers() ?>
            </tbody>
        </table>
    </div>
<?php require_once("footer.php")?>