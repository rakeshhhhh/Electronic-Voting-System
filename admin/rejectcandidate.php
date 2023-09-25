<?php
include ('../connection.php');
$id=$_REQUEST['id'];
$query="update tbl_login set status='REJECT' where candid=$id";
$result=mysqli_query($conn,$query);
if($result===TRUE){
    echo"<script type=\"text/javascript\">
         alert(\"Succesfully Rejected\");
         window.location=(\"ApproveorReject.php\");
    </script>";
}
?>