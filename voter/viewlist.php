<?php
include 'voterbase.php';
?>
<style>
    th{
        
        background-color:lightblue;
        width:200px;
        height:50px;
    }
    td{
        padding:5px;
    }
</style>
<table style="width:100px;" border='5' align="center" cellspacing="5" >
             <th>CANDIDATE  ID    </th>
   
             <th>  CANDIDATE NAME </th>
               <th>  AGE </th>
           <th>  ADDRESS </th>
            <th>  CONTACT </th>
            <?php
            include '../connection.php';
            $id=$_GET['id'];
                $qry=mysql_query("select tbl_candidate.candid,tbl_candidate.name,tbl_candidate.age,tbl_candidate.address,tbl_candidate.contact from tbl_candidate,tbl_election where tbl_candidate.ename='$id'");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['candid']."</td><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['contact']."</td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          

            ?>
            <?php
 include 'footer.php';
?>
  
