<?php
include '../commonbase.php';
?>
<?php
include('connection.php');


$a = "SELECT c.*, l.* FROM tbl_candidate c, tbl_login l WHERE c.`candid` = l.`reg_id` AND l.`status`='PENDING'";
$qry = mysqli_query($conn, $a);
if (mysqli_num_rows($qry) < 1) {
//    echo "<h1><center>No Candidates</center></h1>";
    // echo '<div style="text-align:center; margin:100px 0;"><img src="images/No_data.png" style="width: 500px; height: 300px alt=" No Data Found" ></div>';
} else {
    ?>
    <div style="text-align:center; margin:100px 0;">
        <h1 style="margin-bottom: 50px">View Candidate Request</h1>
        <table border='2' align="center">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Election</th>
                <th>Contact</th>
                <th>Approve</th>
                <th>Reject</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($qry)) {
                $id = $row['candid'];
                $name = $row['name'];
                $age = $row['age'];
                $ename = $row['ename'];
                $contact = $row['contact'];
                ?>

                <tr>
                    <td>
                        <?php
                        echo "$name";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo "$age";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo "$ename";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo "$contact";
                        ?>
                    </td>
                    <td>
                        <a class="btn-approve" href="approvecandidate.php?id=<?php echo $id; ?>">
                            Approve </a>

                    </td>
                    <td>
                        <a class="btn-reject" href="rejectcandidate.php?id=<?php echo $id; ?>">
                            Reject </a>

                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</div>
<?php
include 'footer.php';
?>
