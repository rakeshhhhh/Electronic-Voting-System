<?php
session_start();
//include 'candidatebase.php';
?>
<div style="text-align: center;">
    <table border='2' align="center">
        <tr>
        <th> CANDIDATE NAME </th>
        <th>POSITION</th>
        <th> COUNT </th>
        </tr>
        <?php
        include 'connection.php';
        $cid= $_SESSION['candid'];
        $a = "SELECT  DISTINCT *,COUNT(tblpolling.candid) AS c FROM tblpolling JOIN tbl_candidate ON tblpolling.candid=tbl_candidate.candid WHERE tblpolling.`eid`=(SELECT MAX(eid) FROM tblpolling) GROUP BY tblpolling.candid";
       
        $qry = mysqli_query($conn, $a);
       
        while ($row = mysqli_fetch_array($qry)) {
            echo $cid;
        ?>
            <tr>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['position']; ?>
                </td>
                <td>
                    <?php echo $row['c']; ?>
                </td>
            </tr>
        <?php

        }
        
        ?>
    </table>
</div>

<!-- <img src="images/winner.jpg" height="500" width="100" alt="" /> -->
<style>
    th {
        padding: 12px;
        background-color: lightblue;

    }

    td {
        padding: 12px;
    }
</style>

<?php
//include 'footer.php';
?>