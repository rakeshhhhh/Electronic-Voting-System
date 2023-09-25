<?php
include 'candidatebase.php';
include '../connection.php';
?>
<style>
    th {
        text-align: center;
        background-color: lightblue;
        padding: 20px;

    }

    td {
        text-align: center;
        padding: 2px;
    }
    img{
        text-align: center;
        width: 100px;
        height: 100px;
    }
</style>
<?php


$a = "SELECT * FROM `tbl_candidate` WHERE ename=(SELECT MAX(id) FROM tbl_election)";
$result = mysqli_query($conn, $a);
if ($result->num_rows > 0) {
?>
    <table border="1" align="center" width="80%">



        <th>Name</th>
        <th>Age</th>
        <th>Department</th>
        <th>Contact</th>
    <?php



    while ($row = mysqli_fetch_array($result)) {
       
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['dept'] . "</td><td>" . $row['contact'] . "</td></tr>";
    }
    
    
} else {
    echo '<div style="text-align:center; margin:100px 0;"><img src="images/No_data.png" style="width: 500px; height: 500px alt=" No Data Found" ></div>';
}

    ?>
    </table>
            <br><br><br><br><br><br><br>
            <?php
 include 'footer.php';
?>
  