
<?php
session_start();
include '../connection.php';
$voterid=$_SESSION['id'];
$eid=$_GET['eid'];
$candid=$_GET['candid'];
$q="insert into tblpolling (eid,voterid,candid) values('$eid','$voterid','$candid')";
$s=mysql_query($q);
if($s)
{ 
$q="select count(*) from tblpollcount where candid='$candid'";
$s=mysql_query($q);
$r=mysql_fetch_array($s);
//echo $q;
if($r[0]==0)
{
    $q="insert into tblpollcount (candid,count,eid) values('$candid',1,'$eid' )";
    $s=mysql_query($q);

}
else
{
    $q="select count(*) from tblpolling where candid='$candid' ";
    $s=mysql_query($q);
    $r=mysql_fetch_array($s);
    $count=$r[0];
    $q="update tblpollcount set count='$count' where candid='$candid' and eid='$eid'";
    $s=mysql_query($q);

}
echo $q;
    
    echo '<script>alert("Casted vote")</script>';
  echo '<script>location.href="voterhome.php"</script>';
}
?>
            ?>
            <?php
 include 'footer.php';
?>
  