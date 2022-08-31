 <?php

 include("config.php");

 $sql = "UPDATE notifications SET status='1'";
 $res = mysqli_query($conn,$sql);
 if ($res){
    echo "success";
 }
    else{
        echo "failed";
    }