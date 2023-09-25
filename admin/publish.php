<?php
session_start();
include 'connection.php';
include '../commonbase.php';
?>
<style>
    th{
        padding:25px;
        background-color:lightblue;
        width:200px;
        height:50px;
    }
    td{
        padding:25px;

    }
</style>
<div >&nbsp;&nbsp;&nbsp;</div>
<table style="width:100px;"  border='5' align="center" cellspacing="5">


    <th>  ELECTION NAME </th>
    <th>  PUBLICATION DATE </th>
    <th>  RESULT </th>

    <?php
    include '../connection.php';
    $a = "SELECT DISTINCT e.* FROM `tbl_election` e,`tblpolling` p WHERE e.`id`=p.`eid` AND p.`status`='notpulished'";
    
    $qry = mysqli_query($conn, $a);
    while ($row = mysqli_fetch_array($qry)) {
        ?>
        <tr>  <td><?php echo $row['ename'] ?></td>
            <td><?php echo $row['pdate'] ?></td>
            <td></a>&nbsp;   <a  href="publishresult.php?id=<?php echo $row['id']; ?>">
                            Publish </a>


        </tr>      <?php
}
    ?>

</table>
<?php
include 'footer.php';
?>
  

