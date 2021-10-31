<?php require_once("header.php");?>
<?php require_once("includes/manageComputer.php")?>
<div class="mx-5">
    <h3>MANAGE COMPUTERS</h3>
    <table class="table table-light table-bordered">
        <thead>
            <tr>
                <th class="fit">#</th>
                <th class="fit">Computer Name</th>
                <th class="fit">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php getAllComps()?>
        </tbody>
    </table>
</div>


<?php require_once("footer.php")?>