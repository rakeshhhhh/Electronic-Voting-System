<?php
include '../commonbase.php';
?>


<style>
    th {

        background-color: lightblue;
        padding: 15px;
    }

    td {
        padding: 2px;
    }
</style>
<table border='2' align="center">

    <th>ELECTION NAME </th>
    <th>CANDIDATE NAME </th>
    <th> PARTY </th>
    <th> SYMBOL </th>
    <th> COUNT </th>




    <?php
    include '../connection.php';

//     $a = "select tbl_election.id as eid,tbl_election.ename,tbl_candidate.candid,tbl_candidate.party,tbl_candidate.symbol,tblpollcount.count from tbl_candidate,tbl_election,tblpollcount where tbl_election.id=tbl_candidate.ename and tbl_candidate.candid=tblpollcount.candid and tbl_election.id=tblpollcount.eid";
//     $qry = mysqli_query($conn, $a);
//     while ($row = mysqli_fetch_array($qry)) {
//         echo "<tr><td>" . $row['eid'] . "</td><td>" . $row['ename'] . "</td><td>" . $row['candid'] . "</td><td>" . $row['party'] . "</td><td>" . $row['count'] . "</td><td><img src='../" . $row['symbol'] . "' alt='aa' style='width:100px;height:100px;'></td>
// <td><a href='winner.php?eid=" . $row['eid'] . "&eid=" . $row['eid'] . "&ename=" . $row['ename'] . "&count=" . $row['count'] . "' class='btn btn-danger'>DECLARE WINNER</a></td></td></tr>";
//     }
//     ?>
//     <?php
    $a = "SELECT c.*,p.count FROM tbl_candidate c, tblpollcount p WHERE c.`candid` = p.`candid`";
    $qry = mysqli_query($conn, $a);
    while ($row = mysqli_fetch_array($qry)) {
        $id = $row['candid'];
        $name = $row['name'];
        $age = $row['age'];
        $address = $row['address'];
        $ename = $row['ename'];
        $dist = $row['dist'];
        $party = $row['party'];
        $symbol = $row['symbol'];
        $contact = $row['contact'];
        $status = $row['status'];
        $count = $row['count'];

    ?>
        <tr>
            <td>
                <?php
                echo "$ename";
                ?>
            </td>
            <td>
                <?php
                echo "$name";
                ?>
            </td>
            <td>
                <?php
                echo "$party";
                ?>
            </td>
            <td>
                <?php
                echo "$symbol";
                ?>
            </td>
            <td>
                <?php
                echo "$count";
                ?>
            </td>
        </tr>
    <?php
    }

    ?>

</table>
            ?>
            <?php
 include 'footer.php';
?>
  