<?php
include('../commonbase.php');


include('connection.php');
?>
<div class="constu-div">
<form method="POST" enctype="multipart/form-data">
    <div style="height: 500px; text-align: center; padding:200px" >
    <table align="center">

        <tr>
            <td> Departments</td>
            <td><input type="text" name="name" required class="form-control"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="ADD " class="btn btn-primary" align="center"></td>
        </tr>

    </table>
    </div>
</form>
    

<?php
include './connection.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $sel = "SELECT COUNT(*) AS COUNT FROM `dept` WHERE `dept`='$name'";
   $check = mysqli_query($conn, $sel);
    $fetch = mysqli_fetch_array($check);
    if ($fetch['COUNT'] > 0) {
       ?> <script>alert("Department Already Added.")</script><?php
    } else {
        $qry = "INSERT INTO `dept`(`dept`)VALUES('$name')";
        $exe = mysqli_query($conn,$qry);
        if ($exe) {
            echo '<script>alert("Department Succesfully added")</script>';
        } else {
            echo '<script>alert("Failed to add Department  ")</script>';
        }
    }
}
?>


<?php
include('./Footer.php');
?>