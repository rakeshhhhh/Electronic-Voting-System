<?php
include '../connection.php';
$id = $_REQUEST['id'];

$query = "UPDATE `tblpolling` SET `status`='Published' WHERE `eid`='$id'";
$winner = "SELECT COUNT(`voterid`) AS c,candid FROM `tblpolling` WHERE eid='$id' GROUP BY candid";
$result = mysqli_query($conn, $query);
$result_win = mysqli_query($conn, $winner);

// echo $result;

while ($row = mysqli_fetch_array($result_win)) {

   $CAND_ID = $row['candid'];
   $COUNT = $row['c'];
   $win_count = "INSERT INTO `tbl_winner` (`candid`, `count`) VALUES('$CAND_ID', '$COUNT')";
   mysqli_query($conn, $win_count);
}

$WINNER_MAIN = "SELECT MAX(tw.`count`) AS Cou, tw.`candid`, c.name FROM `tbl_winner` tw, `tbl_candidate` c WHERE tw.candid = c.candid ";
$COUNTX = mysqli_query($conn, $WINNER_MAIN);
while ($rowx = mysqli_fetch_array($COUNTX)) {

   $CAND_ID = $rowx['candid'];
   $COUNT = $rowx['Cou'];
   $CANDIDATE = $rowx['name'];

}


if ($result) {
?>
   <script>
      alert("Succesfully published");
      window.location = ("publish.php");
   </script>
<?php
}
?>