<?php
session_start();
include('../connection.php');
include 'candidatebase.php';
?>

<style>
    th {

        background-color: lightblue;
        padding: 15px
    }

    td {
        padding: 2px;
    }
</style>
<table border='2' align="center" width=25%>
    <th>NAME</th>
    <th>STATUS</th>

    <?php
 //$logdata="select * from login";
  //$qry = mysqli_query($conn, $logdata);
    $uid = $_SESSION['USERID'];
    //$status=$_SESSION['status'];
    echo $uid;
    $a = "select tbl_election.id as eid,tbl_election.ename,tbl_candidate.candid,tbl_candidate.name,tbl_candidate.age,tbl_candidate.address,tbl_candidate.contact,tbl_candidate.party,tbl_candidate.symbol from tbl_candidate,tbl_election where tbl_election.id=tbl_candidate.ename";
    $qry = mysqli_query($conn, $a);
    echo $a;
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr><td>" . $row['name'] . "</td><td>".$row['status']."</td></tr>";
    }

    $c = "SELECT * FROM `tbl_login` l,`tbl_voter` v WHERE l.`reg_id`=v.`voterid` AND l.`username`='$uid'";
    $qry1 = mysqli_query($conn, $a);
    while ($row1 = mysqli_fetch_array($qry1)) {
    ?>
        <tr>
            <td><?php echo $row1['name']; ?></td>
            <td><?php echo $row1['status']; ?></td>

        </tr>
    <?php
    }

    ?>

</table>
<?php
include 'footer.php';
?>