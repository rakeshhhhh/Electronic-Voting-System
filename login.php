<?php
session_start();
include 'connection.php';
include 'commonbase.php';
?>
<style>
    td{
        padding: 4px;
    }
    </style>
 <form method="POST" enctype="multipart/form-data">
                    
<table align="center">
    <br>
    <br>
    <br>
    <br>
    <tr><td>Name:</td><td><input type="text" name="username" required class="form-control"></td></tr>
<tr><td> Password</td><td><input type="password" name="password" required class="form-control"></td></tr>
<tr><td><input type="submit" name="submit" value="LOGIN" class="btn btn-primary" align="center"></td></tr>
 </form>
<?php
include ('connection.php');
if(isset($_POST['submit']))
    {
    $email=$_POST['username'];
    $_SESSION['username']=$email;
    $password=$_POST['password'];
    $qry="select * from tbl_login where username='$email' and password='$password' AND `status`!='PENDING'";
    $check= mysqli_query($conn,$qry);

           if(mysqli_num_rows($check)==0)
               {
               echo "<script>alert('invalid user'')</script>";
           }
           else
           {
               $row= mysqli_fetch_assoc($check);           
             
               $_SESSION["id"]=$row["id"];
               if($row["usertype"]=="admin")
                {
                   echo "<script>window.location='admin/adminhome.php'</script>";
                }
               else if($row["usertype"]=="Voter")
                             
                {
                   
                   //echo "<script>alert(' Welcome...Voter');</script>";
                   $q2="SELECT * FROM tbl_voter WHERE `email`='$email'";
                   //echo $q2;
                   $q3=mysqli_query($conn,$q2);
                   $row1=  mysqli_fetch_array($q3);
                   $_SESSION["USERID"]=$row1['voterid'];
                    //$_SESSION["CONSTU"]=$row1['place'];
                    if($row['status']=='VOTED' or $row['status']=='approved')
                  
                    {
                     echo "<script>alert('Welcome... Voter');</script>";
 
                     echo "<script>window.location='voter/2login.php'</script>";
                    }

                    if($row['status']=='Non-Voted' or $row['status']=='approved')
                  
                   {
                    echo "<script>alert('Welcome... Voter');</script>";

                    echo "<script>window.location='voter/voterhome.php'</script>";
                   }
                }
                 else if($row["usertype"]=="Candidate")
                             
                {
                   echo "<script>alert(' Welcome...');</script>";
                   $a= "select * from tbl_candidate where candid='$email'";
                   $q2=  mysqli_query($conn,$a);
                   $row1=  mysqli_fetch_array($q2);
                   $_SESSION['candid']=$row1['id'];
                   $_SESSION['constituency'];
                    if($row1["status"]==1)
                    {
                        echo "<script>alert('Account Not Activated');</script>";
                    }
                   else
                   {
                    echo "<script>window.location='candidate/candidatehome.php'</script>";
                   }
                }
              
            
                  
           }
           
     }
    
   
?>

    
