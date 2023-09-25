<!DOCTYPE html>
<html lang="en">

<?php
include '../commonbase.php';
?>

    
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve or Reject</title>
</head>
<body>
    <?php
    include 'connection.php';
    
    ?>
    <!--<div>-->
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Election</th>
            <th>Contact</th>
            <th>Email</th>
        </tr>
        <?php
        $a = "SELECT * FROM tbl_candidate";
        $qry = mysqli_query($conn, $a);
        while ($row = mysqli_fetch_array($qry)) {
            
        ?>
            <tr>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                   <?php echo $row['age'] ?>
                </td>
                <td>
                   <?php echo $row['ename'] ?>
                </td>
                <td>
                   <?php echo $row['contact'] ?>
                </td>
                <td>
                   <?php echo $row['password'] ?>
                </td>
            </tr>
            <?php
        }

?>
        </table>



</body>
           
            <?php
 include 'footer.php';
?>
  
</html>