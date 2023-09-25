<?php
include '../commonbase.php';
?>


<?php
include "../connection.php";
?>
<div class="ele-div">

    <form method="POST" enctype="multipart/form-data">

        <table>
            <tr><td>Election Name</td><td><input type="text" name="ename" required class="form-control"></td></tr>
            <tr><td> Publication Date</td><td><input type="date" name="pdate" required class="form-control"></td></tr>
            <tr><td><input type="submit" name="submit" value="REGISTER" class="btn btn-primary" align="center"></td></tr>

        </table>
    </form>

</div>
<?php
if (isset($_POST['submit'])) {

    $ename = $_POST['ename'];
    $pdate = $_POST['pdate'];
    $a = "select count(*) as count from tbl_election where ename='$ename'";
    $check = mysqli_query($conn, $a);
    $fetch = mysqli_fetch_array($check);
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Registered ")</script>';
    } else {
        $a = "update tbl_election set status='0'";
        $sql1 = mysqli_query($conn, $a);
        $qry = "insert into tbl_election (ename,pdate,status) values('$ename','$pdate','1')";


        $exe = mysqli_query($conn, $qry);
        if ($qry) {

            echo '<script>alert("Added successfully")</script>';
        }
    }
}
?>
<br><br>
<h3 align="center" style=" " >Election List</h3>
<br>
<div>
    <table style=""border='5'  align="center" cellspacing="5"  >
        <th>ELECTION  ID    </th>

        <th>  NAME </th>
        <th>  PUBLICATION DATE </th>


        <?php
        $a = "select * from tbl_election where status='1'";
        $qry = mysqli_query($conn, $a);
        while ($row = mysqli_fetch_array($qry)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['ename'] . "</td><td>" . $row['pdate'] . "</td></tr>";
        }
        ?>

    </table>
</div>
?>
<?php
include 'footer.php';
?>
  





