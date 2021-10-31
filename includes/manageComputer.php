<?php
require_once("classes/computer.php");

function getAllComps()
{
    $computer =  Computer::newComputer("","","");
    // $computer = new Computer("", "", "");

    $result = $computer->getAllComputers();

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo '
            <tr>
                <td class="fit">' . $i . '</td>
                <td class="fit">' . $row["computer_name"] . '</td>
                <td class="fit">
                    <a class="btn btn-primary editComp" href="edit-computer.php?id='. $row["computer_id"].'"><i class="far fa-edit"></i></a>
                </td>
            </tr>
        ';
        $i++;
        }
    }
}
