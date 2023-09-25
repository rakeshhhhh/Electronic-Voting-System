<?php
include './connection.php';
include './commonbase.php';
?>


<form method="POST" enctype="multipart/form-data">

    <table align="center">


        <tr><td> Name</td><td><input type="text" name="name" required class="form-control"></td></tr>
        <tr><td> Age</td><td><input type="text" name="age" required class="form-control"></td></tr>
        <td>Department</td>
        <td><select class="form-control" name='dept'>
                <option>Select Department</option>
                <?php
                $a = "SELECT `dept` FROM `dept`";
                $qry = mysqli_query($conn, $a);
                while ($row = mysqli_fetch_array($qry)) {
                    ?><option value=<?php echo $row['dept'] ?>><?php echo $row['dept'] ?></option>
                    <?php
                }
                ?>
                        </select></td></td></tr>
                <tr><td> Contact</td><td><input type="text" name="contact" maxlength="10"required class="form-control"></td></tr>
                <tr><td> Email</td><td><input type="email" name="email" required=" *" class="form-control"></td></tr>
                <tr><td> ID Proof</td><td><input type="file" name="img" required class="form-control"></td></tr>

                <tr><td><input type="submit" name="submit" value="REGISTER" class="btn btn-primary" align="center"></td></tr>

    </table></form>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dept=$_POST['dept'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $upfold = "images/";
    $mimage = $upfold . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $mimage);
    $a = "SELECT COUNT(*)AS COUNT FROM `tbl_voter` WHERE `email`='$email'";
//     echo $a; 

    $check = mysqli_query($conn, $a);
    $fetch = mysqli_fetch_array($check);
    if ($fetch['COUNT'] > 0) {
        echo '<script> alert("Already Registered ")</script>';
    } else {
        $qry = "INSERT INTO tbl_voter(`name`,`age`,`dept`,`contact`,`idproof`,`status`,`email`)VALUES('$name','$age','$dept','$contact','$mimage','1','$email')";
// echo $qry;
        if (mysqli_query($conn, $qry)) {


            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $s = implode($pass);
            echo "<script>alert(' YOUR PASSWORD FOR LOGIN= $s')</script>";

            $qry2 = "INSERT INTO `tbl_login`(`reg_id`,`username`,`password`,`usertype`,`status`)VALUES((SELECT MAX(`voterid`)FROM `tbl_voter`),'$email','$s','Voter','Non-Voted')";
            $logqry = mysqli_query($conn, $qry2);

            echo '<script>alert("successfull")</script>';
        }
    }
}
?>
   