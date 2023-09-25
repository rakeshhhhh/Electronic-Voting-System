<?php
include '../commonbase.php';
?>

<style>
    td{
        padding: 4px;
    }
    
    
    
    </style>         
    <form method="POST" enctype="multipart/form-data">
                    
<table align="center">
<tr><td>Panchayath</td><td><input type="text" name="name" required class="form-control"></td></tr>
<tr><td> Location</td><td><input type="text" name="location" required class="form-control"></td></tr>

<tr><td> Address</td><td><textarea name="address" required class="form-control"></textarea></td></tr>
<tr><td> District</td><td>
    
        
        <select name="dist" class="form-control">
            
            <option value="ernakulam">Ernakulam</option> 
            <option value="thrissur">Thrissur</option> 
            <option value="kannur">Kannur</option> 
            </select>
    </td></tr>



<tr><td><input type="submit" name="submit" value="REGISTER" class="btn btn-primary" align="center"></td></tr>

</table></form>
    <?php
   include '../connection.php';
    if(isset($_POST['submit']))
{
     
        $name=$_POST['name'];
           $location=$_POST['location'];
         $address=$_POST['address'];
            $dist=$_POST['dist'];
            $check = mysql_query("select count(*) as count from tbl_panchayath where name='$name' and dist='$dist' and address='$address' and dist='$dist'");
         $fetch = mysql_fetch_array($check);
         if ($fetch['count'] > 0)
             { 
              echo '<script> alert("Already Registered ")</script>';
    }
    else { 
         $qry ="insert into tbl_panchayath (name,location,address,dist) values('$name','$location','$address','$dist')";
 
      
        $exe = mysql_query($qry);
        if ($qry) {
           
            echo '<script>alert("Registered successfully")</script>';
        }
    }
}


    
?>
    <br><br>
    <h3 align="center">Registered Panchayath List</h3>
    <br>
    <table style="width:100px;" border='5' align="center" cellspacing="5" >
             <th>PANCHAYATH  ID    </th>
   
             <th>  NAME </th>
               <th>  LOCATION </th>
            <th> ADDRESS  </th>
           
           
             <th> DISTRICT </th>
           
            
            <?php
            include '../connection.php';
            $qry=mysql_query("select * from tbl_panchayath");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['location']."</td><td>".$row['address']."</td><td>".$row['dist']."</td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          



            
