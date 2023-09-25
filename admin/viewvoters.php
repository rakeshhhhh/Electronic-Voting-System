<?php
include '../commonbase.php';
?>


<style>
    th {

        background-color: lightblue;
        padding: 15px;

    }

    td {
        padding: 2px;
    }
</style>
<table style="width:200px;" border='2' align="center">
    <th>VOTER ID </th>

    <th> NAME </th>
    <th> AGE </th>
    <th> ADDRESS </th>


    <th> DISTRICT </th>

    <th> PLACE </th>
    <th> CONTACT </th>
    <th> ID PROOF </th>
    <?php
    include '../connection.php';
    $a = "select * from tbl_voter";
    $qry = mysqli_query($conn, $a);
    while ($row = mysqli_fetch_array($qry)) {
        echo "<tr><td>" . $row['voterid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['address'] . "</td><td>" . $row['dist'] . "</td><td>" . $row['place'] . "</td><td>" . $row['contact'] . "</td><td><img src='../" . $row['idproof'] . "' alt='aa' style='width:200px;height:200px;'></td></tr>";
    }
    ?>

</table>
            ?>
            <?php
 include 'footer.php';
?>
  