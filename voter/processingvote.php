<?php
session_start();
include '../connection.php';

$eid = $_REQUEST['id'];
$candi = $_REQUEST['candid'];
$q = $_SESSION['USERID'];
// $constu = $_REQUEST['constu'];

// echo $eid;
$r = "SELECT COUNT(*) AS COUNT,`candid`  FROM `tblpolling` WHERE `voterid`='$q' AND `eid`='$eid'";
echo $r;
$b = "update `tbl_login` SET `status`='VOTED' WHERE reg_id='$q'";
$qry = mysqli_query($conn, $b);
echo $b;
$data = mysqli_query($conn, $r);
$fetch = mysqli_fetch_assoc($data);

if ($fetch['COUNT'] > 0) {

?>

<script>
alert("Already  Voted ....\ncannot vote again to the candidate")
</script>
<?php
$b = "update `tbl_login` SET `status`='VOTED' WHERE reg_id='$q'";
$qry = mysqli_query($conn, $b);
echo $b;
?>
<script>
window.location = ("viewelection.php")
</script>

<?php
}
 if ($fetch['candid'] < 0) {
    $query = "SELECT COUNT(candid) FROM tblpolling";
    $votecount = '1';
    $query = "INSERT INTO `tblpolling`(`eid`,`voterid`,`candid`,`vote_count`)VALUES('$eid','$q','$candi','$votecount')";
    echo $query;
    echo 'jfjfjfjfjf';
    $result = mysqli_query($conn, $query);
    echo $result;
    if ($result == TRUE) {
    ?>
<script>
alert("Succesfully voted");
window.location = ("viewelection.php");
</script>
<?php
    }
} else {   
    $y="INSERT INTO `tblpollcount`(`candid`,`count`) VALUES('$candi','1') WHERE candid='$candi'";
    $qry1 = mysqli_query($conn, $y);
    $vote="UPDATE INTO `tblpollcount` SET `vote_count`='1'";
    $query = "INSERT INTO `tblpolling`(`eid`,`voterid`,`candid`,`vote_count`)VALUES('$eid','$q','$candi','1')";
    echo $query;
    $result = mysqli_query($conn, $query);
    echo $result;
    if ($result == TRUE) {
    ?>
<script>
alert("Succesfully voted");
window.location = ("viewelection.php");
</script>
<?php
    }
}
?>