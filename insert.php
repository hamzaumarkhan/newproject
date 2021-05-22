<?php
      include('include/db.php');
   
        
        $sql="INSERT INTO user(name, email, phone,password) VALUES 
        ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[password]')";
        $run=mysqli_query($conn,$sql);
        if($run) {
          echo'sdfsadfghjkghn';
        }
    
?>
