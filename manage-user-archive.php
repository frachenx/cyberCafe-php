<?php require_once("header.php") ?>
<?php require_once("includes/manageUserArchive.php")?>
    <div class="mx-5">
        <h3>USER ARCHIVE</h3>
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
                <?php getUsers() ?>
            </tbody>
        </table>
    </div>

<?php require_once("footer.php") ?>