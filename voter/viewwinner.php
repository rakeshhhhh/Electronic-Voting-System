<?php

include 'voterbase.php';

?>
<table  border='2' align="center" >
             <th>ELECTION  ID    </th>
      <th>ELECTION  NAME    </th>
              <th>CANDIDATE  ID    </th>
              
             <th> CANDIDATE NAME </th>
            
           
             <th> PARTY  </th>
                <th>  COUNT </th>
           
            
                       

<?php
include '../connection.php';

$a="select tbl_election.id as eid,tbl_election.ename,tbl_candidate.candid,tbl_candidate.name,tbl_candidate.party,tbl_winner.count from tbl_candidate,tbl_election,tbl_winner where tbl_election.id=tbl_candidate.ename and tbl_candidate.candid=tbl_winner.candid and tbl_election.id=tbl_winner.eid";
$qry=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($qry))
{
echo "<tr><td>".$row['eid']."</td><td>".$row['ename']."</td><td>".$row['candid']."</td><td>".$row['name']."</td><td>".$row['party']."</td><td>".$row['count']."</td></tr>";
                                                    
  }
            ?>
            
        </table>



<style>
    th{
        
        background-color:lightblue;
       
    }
    td{
        padding:2px;
    }
</style>
            ?>
            <?php
 include 'footer.php';
?>
  