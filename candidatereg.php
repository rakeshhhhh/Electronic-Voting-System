<?php
session_start();
include('./commonbase.php');
include('connection.php');
?>
<form method="POST" enctype="multipart/form-data">
    <table align="center">
        <br>
        <br>
        <br>
        <tr>
            <td> Name</td>
            <td><input type="text" name="name" required class="form-control"></td>
        </tr>
        <tr>
            <td> Age</td>
            <td><input type="number" name="age" required class="form-control"></td>
</tr>
        <tr>
            <td>Select Election</td>
            <td><select class="form-control" name='ename'>
                    <option>Select Election</option>
                    <?php
                    $a = "select * from tbl_election where status='1'";
                    $qry = mysqli_query($conn, $a);
                    while ($row = mysqli_fetch_array($qry)) {
                        ?><option value="<?php echo $row['id'] ?>"><?php echo $row['ename'] ?></option>
                        <?php
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td> Position</td>
            <td>
                <select name="position" class="form-control">
                    <option >Select your position</option>
                    <option value="Chairman">Chairman</option>
                    <option value="Vice -Chairman">Vice -Chairman</option>
                    <option value="The General Secretary">The General Secretary</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Department</td>
            <td><select class="form-control" name='dept'>
                    <option>Select Departments</option>
                    <?php
                    $a = "SELECT `dept` FROM dept";
                    $qry = mysqli_query($conn, $a);
                    while ($row = mysqli_fetch_array($qry)) {
                        ?><option value=<?php echo $row['dept'] ?>><?php echo $row['dept'] ?></option>
                        <?php
                    }
                    ?>
                </select></td></td>
            </select>
            </td>
        </tr>
        <tr>
            <td> Contact</td>
            <td><input type="text" name="contact" maxlength="10" required class="form-control"></td>
        </tr>
        
        <tr>
            <td> Email</td>
            <td><input type="text" name="email" required class="form-control"></td>
        </tr>
        <tr>
            <td> Password</td>
            <td><input type="password" name="password" pattern="[A-Za-z0-9]{4}"  id="password" onkeyup='check();'  required class="form-control"></td>
                </tr>
                <tr>
            <td>  Confirm Password</td>
            <td><input type="password" name="confirm_password" pattern="[A-Za-z0-9]{4}" id="confirm_password"  onkeyup='check();' required class="form-control" />
            <span id='message'></span></td> </tr>
        <br><br><br> 
        <tr>
            <td><input type="submit" name="submit" value="REGISTER" class="btn btn-primary" align="center"></td>
        </tr>

    </table>
</form>
<br><br><br><br><br><br><br>
<?php
?>
<script>
var check = function() {
    
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
          
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }
  </script>
  <?php
include('connection.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $ename = $_POST['ename'];
    $dept = $_POST['dept'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $position= $_POST['position'];
    $a = "SELECT COUNT(*) AS COUNT FROM tbl_candidate WHERE `ename`=`$email` ";
    $check = mysqli_query($conn, $a);
    $fetch = mysqli_fetch_array($check);
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Registered ")</script>';
    } else {
        $qry = "INSERT INTO `tbl_candidate` (`name`,`age`,`dept`,`ename`,`contact`,`password`,`email`,`position`)VALUES('$name','$age','$dept','$ename','$contact','$email','$password','$position')";
    //    echo ($qry);

        $exe = mysqli_query($conn, $qry);
        if ($qry) {
            $a = "INSERT INTO tbl_login (`reg_id`,`username`,`password`,`usertype`,`status`)VALUES((SELECT MAX(candid)FROM tbl_candidate),'$email','$password','Candidate','PENDING')";
            $logqry = mysqli_query($conn, $a);
            ;

            echo '<script>alert("successfull")</script>';
        } else {
            echo '<script>alert("login error")</script>';
        }
    }
}
?>
<?php
include('./Footer.php');
?>