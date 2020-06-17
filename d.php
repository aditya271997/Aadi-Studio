<?php
include 'conn.php';
error_reporting(0);
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $book = $_POST['book'];
  $date = $_POST['date'];
  $address = $_POST['address'];
  
  $qry = "INSERT INTO `contact2`(`name`, `email`, `book`, `date`, `address`) VALUES ('$name','$email','$book','$date','$address')";
 
     $query= mysqli_query($con,$qry);
}
?>

<!DOCTYPE html>
<html>
<head>
  
  <title>Aadistudio</title>
  <link rel="icon" type="image/icon" href="logo/logo.png" />
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Latest compiled and minified CSS -->
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
     
    <div class="">
      <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top"> 
         <div class="container md-4">
          <a href="#" class="navbar-brand text-primary font-weight-bold ">
             <img src="logo/logo.png"class="d-inline-block align-top" alt="">
          Aadistudio.com</a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="collapsenavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                      <a href="index.php"class="nav-link text-white active">Home</a>
                </li>
                <li class="nav-item">
                      <a href="model.php"class="nav-link text-primary">Models</a>
                </li>
                <li class="nav-item ">
                      <a href="gallery.php"class="nav-link text-primary">Gallery</a>
                </li>
                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Appply For
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-primary" href="#">photographer</a>
          <a class="dropdown-item text-primary" href="#">makeup artist</a>
          <a class="dropdown-item text-primary" href="#">
            Fashion designer
          </a>
           <a class="dropdown-item text-primary" href="#">Cinematographer</a>
        </div>
      </li>

                </li>
                <li class="nav-item">
                      <a href="contact.php"class="nav-link text-primary">Contact us</a>
                </li>
         </ul>
         </div>
               

                </nav>   

                <div class="container-fluid">
  <div class="col-lg-12"><br><br>
  	<h1 class="text-center text-primary mt-5"> Displaying Table</h1>
  	<table class=" table table-striped table-hover table-bordered ">
  		<tr class="bg-dark text-white text-center">
  			<th> Id</th>
  			<th> Name</th>
  			<th> Email</th>
  			<th> book</th>
  			<th> date</th>
  			<th> address</th>
  			<th> reply</th>
  		</tr>
<?php
   include 'conn.php';
	
	$qry = "select*from contact2";
 
     $query= mysqli_query($con,$qry);
     while($res= mysqli_fetch_array($query))
     {


 
?>
  		<tr class="text-center">
  			<td> <?php echo $res['id'];  ?></td>
            <td> <?php echo $res['name']; ?></td>
            <td> <?php echo $res['email']; ?></td>
            <td> <?php echo $res['book']; ?></td>
            <td> <?php echo $res['date']; ?></td>
            <td> <?php echo $res['address']; ?></td>
            <td><button class="btn-danger btn"> <a href="display.php?id=<?php echo $res['id'];?>" class="text-white"> delete</a></button></td>
         
  			
  		</tr>

<?php
}
?>
</table>
  </div>	

</div>


</body>
</html>

