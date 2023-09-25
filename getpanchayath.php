<?php
include 'connection.php';
$cat=$_POST['cat'];
$d=  mysql_query("select name from tbl_panchayath where dist='$cat'");

while($rt=mysql_fetch_array($d))
{
//echo '<script>alert("'.$rt['name'].'")</script>';
echo '<option>'.$rt['name'].'</option>';
}
?>

