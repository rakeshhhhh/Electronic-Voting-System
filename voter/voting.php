<?php
session_start();
include '../connection.php';
include 'voterbase.php';
?>
<br><br><br>
<center>
    <h2 style='color: teal; font-weight: bold'>Vote</h2>
    <?php
    //    echo $eid;
    $q = $_SESSION['USERID'];
    //echo $q;
    $qry = "SELECT DISTINCT c.* FROM `tbl_candidate` c,`tbl_login` l,tbl_election e WHERE c.`candid`=l.`reg_id` AND l.`status`='APPROVED' AND c.ename=(SELECT MAX(id) FROM tbl_election)";

    $result = mysqli_query($conn, $qry);
    if ($result->num_rows > 0) {

    ?>

        <table width="90%" border="1" class="table-hover" style="padding:20px; margin: 10px; text-align: center;">
            <tr class="table-striped" style="padding: 20px;background-color: teal;color: white;">

                <th style="padding:25px;text-align: center;">Name</th>
                <th style="padding: 25px;text-align: center;">Position</th>
                <th style="padding: 25px;text-align: center;">Status</th>


            </tr>
            <?php
            $eid = $_REQUEST['id'];
            $_SESSION['id'] = $eid;
            while ($row = mysqli_fetch_array($result)) {
                $constu = $row['dept'];
                $candi = $row['candid'];
               // echo  $candi;
                echo "
                <tr style='padding: 20px;'>
                 
                          <td style='padding: 20px;text-align:center'>" . $row['name'] . "</td>
                    <td>" . $row['position'] . "</td>
                       <td>
                  <form>
                    <a href='processingvote.php?id=$eid &candid=$candi'>Vote</a>
                    </form>
                </td>                     
               
            
            </tr>";
                if (isset($_REQUEST['submit'])) {
                    $elid = $_SESSION['id'];
                    // $constu = $row['constituency'];

                    "<script type=\"text/javascript\">
                    alert(\"Succesfully voted\");
                    </script>";

                    $b = "update `tbl_login` SET `status`='VOTED' WHERE reg_id='$q'";
                    $qry = mysqli_query($conn, $b);
                 
                    echo $qry;
                 

                    $r = "SELECT COUNT(*) AS COUNT FROM `tblpolling` WHERE `voterid`='$q' AND `eid`='$eid`tblpolling`'";
                    //echo $r;
                    $data = mysqli_query($conn, $r);
                    $fetch = mysqli_fetch_assoc($data);
                    if ($fetch['COUNT'] > 0) {
                        echo '<script>alert("Already  Voted ....\nCannot vote again to the Election")</script>';
                       
                     } else {
                        $b = "update `tbl_login` SET `status`='VOTED' WHERE reg_id='$q'";
                        $qry = mysqli_query($conn, $b);
                        echo $b;
                       
                    }
                } 
            }


            ?>
        </table>
    <?php
    } else {
        echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
    }

    if(isset($_REQUEST['']))
    ?>
</center>
<br><br>