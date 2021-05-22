<?php 

include('include/db.php');
    
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];


if(isset($_POST['submit'])){
    echo "Submit Button Clicked";
    $query=mysqli_query($con,"Update user 
    SET name='$name',email='$email',phone='$phone',password='$password' where id=$id");

    $result = mysqli_query($con,$query);
    header('location:index.php');  
}

?>