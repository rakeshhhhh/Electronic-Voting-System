<?php
include 'connection.php';
$eid=$_GET['eid'];
$candid=$_GET['candid'];
$party=$_GET['party'];
$count=$_GET['count'];
$a="select count(*) as count from tbl_winner where eid='$eid'";
  $check = mysqli_query($conn,$a);
         $fetch = mysqli_fetch_array($check);
         if ($fetch['count'] > 0)
             { 
              echo '<script> alert("Already Declared.... ")</script>';
              echo '<script>location.href="adminhome.php"</script>';
    }
    else { 
$s="insert into tbl_winner(eid,candid,party,count) values('$eid','$candid','$party','$count')";


$sql=mysqli_query($xconn,$s);
if($sql)
{
    
    $m="update tbl_election set status='0' where id='$eid'";
    $m1=mysqli_query($conn,$m);
    if($m1){
        echo '<script>alert("winner declared")</script>';
          echo '<script>location.href="adminhome.php"</script>';
    }
   
}
    }

?>