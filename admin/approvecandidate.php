<?php
include '../connection.php';
$id=$_REQUEST['id'];

$query="update tbl_login set status='APPROVED' where reg_id='$id'";
$result=mysqli_query($conn,$query);
echo $result;
if($result==TRUE){
    echo "<script type=\"text/javascript\">
         alert(\"Succesfully Approved\");
         window.location=(\"ApproveorReject.php\");
    </script>";
}
