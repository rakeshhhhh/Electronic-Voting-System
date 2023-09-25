<?php
include 'voterbase.php';
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
<table style="width:100px;" border='5' align="center" cellspacing="5" >


    <th>  ELECTION NAME </th>
    <th>  PUBLICATION DATE </th>
    <th></th>
    <?php
    include '../connection.php';
    $a = "select * from tbl_election where status='1'";
    $qry = mysqli_query($conn, $a);
    while ($row = mysqli_fetch_array($qry)) {
        ?>
        <tr>  <td><?php echo $row['ename'] ?></td>
            <td><?php echo $row['pdate'] ?></td>
            <td></a>&nbsp;  <a href="voting.php?id=<?php echo $row['id'] ?>">Choose</a></td>


        </tr>      <?php
}
    ?>

</table>

?>
<?php
include 'footer.php';
?>
  

