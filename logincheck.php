<?php
session_start();
$con = mysqli_connect('localhost','root','','aadistudio');
if($con)
{
	echo "connection successfully";
}
else
{
	echo"no connection";
}

// $db = mysqli_select_db($con,'aadistudio');


if(isset($_POST['submit']))
{
	// var_dump($_POST);exit();
	$username = $_POST['username'];
	$password = $_POST['password'];
    
  
	$sql = "select *from login2 where username ='$username' and password = '$password'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);  

	if($row==2)
		{
			echo "user login2 successfully ";
			$_SESSION['username']=$username; 
			header('location:d.php');          
	    }
	   else
	   { 
	   	     echo "<script>
	   	            window.location.href='Signin.php';
					alert('Wrong Email and Password');
					</script>";
	   }
	
 }

?>