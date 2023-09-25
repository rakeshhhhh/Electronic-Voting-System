<?php

include 'voterbase.php';

?>
<style>
    
    
    
    table{
        
        
        width:300px;
        height:100px;
    }
</style>

<table align="center"><div align="center" id="ex">
<?php
include '../connection.php';
$panch=$_GET['panch'];
$a="select tbl_election.id as eid,tbl_election.ename,tbl_candidate.candid,tbl_candidate.name,tbl_candidate.age,tbl_candidate.address,tbl_candidate.contact,tbl_candidate.party,tbl_candidate.symbol from tbl_candidate,tbl_election where tbl_candidate.panchayath='$panch' and tbl_election.id=tbl_candidate.ename and tbl_election.status='1'";
 $qry=mysqli_query($conn,$a);
            while($row=mysqli_fetch_array($qry))
            {
//               echo "<tr><td>".$row['candid']."</td></tr><tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['contact']."</td></tr>";
                                                    
                                         echo '<tr><td><h3>Election Id: '.$row['eid'].'</td></h3></tr>';
                                         echo '<tr><td><h3>Election Name: '.$row['ename'].'</td></h3></tr>';
                                        echo '<tr><td><h3>Candidate Id: '.$row['candid'].'</td></h3></tr>';
                                         echo '<tr><td><h3>Name: '.$row['name'].'</td></h3></tr>';
                                          echo '<tr><td><h3>Age: '.$row['age'].'</td></h3></tr>';
                                             echo '<tr><td><h3>Address: '.$row['address'].'</td></h3></tr>';
                                              echo '<tr><td><h3>Contact: '.$row['contact'].'</td></h3></tr>';
                                               echo '<tr><td><h3>Party: '.$row['party'].'</td></h3></tr>';
                                                echo '<tr><td><h3>Symbol: '.$row['symbol'].'</td></h3></tr>';
                                                '<br>';
                                                  echo '<td><a href="polling.php?eid='.$row['eid'].'&candid='.$row['candid'].'"><img src="images/vote.png" height="150px" width="500px"></a></td></tr>';
            }
         
            ?>
    </div></table>
            ?>
            <?php
 include 'footer.php';
?>
  

