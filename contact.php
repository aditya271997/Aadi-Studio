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
<link rel="stylesheet" type="text/css" href="style.css">
 <link rel="icon" type="image/icon" href="logo/logo.png">
<!-- Latest compiled and minified CSS -->
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ; margin-top:480px ; }
.pt2 { padding-top:20px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:5px;}
.mb10 { padding-bottom:15px ;}
.footer_ul { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul li {padding:0px 0px 5px 0px;}
.footer_ul li a{ color:#CCC;}
.footer_ul li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2 {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2 li p { display:table; }
.footer_ul2 li a:hover { text-decoration:none;}
.footer_ul2 li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul {
  list-style-type:none;
  padding:0px;
  display:table;
  margin-top: 10px;
  margin-right: auto;
  margin-bottom: 10px;
  margin-left: auto;
}
.foote_bottom_ul li { display:inline;}
.foote_bottom_ul li a { color:#999; margin:0px 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:10px; padding-top:0px; float:left ;margin:auto; }
.social_footer_ul li a { color:#CCC; padding:7px;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
</style>
</head>
<body>
     
    <div class="bgimg">
      <nav class="navbar navbar-expand-md bg-light navbar-light"> 
      	 <div class="container md-4">
      	 	<a href="#" class="navbar-brand text-primary font-weight-bold">
           <img src="logo/logo.png"class="d-inline-block align-top" alt="">
           Aadistudio.com</a>
      	   
      	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
      	    	<span class="navbar-toggler-icon"></span>
      	    </button>
      	    
      	    <div class="collapse navbar-collapse " id="collapsenavbar">
      	    	<ul class="navbar-nav ml-auto">
      	    		<li class="nav-item">
                      <a href="index.php"class="nav-link text-primary">Home</a>
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
          <a class="dropdown-item text-primary" href="#">Fashion designer</a>
           <a class="dropdown-item text-primary" href="#">Cinematographer</a>
        </div>
      </li>
      	    		<li class="nav-item">
                      <a href="contact.php"class="nav-link text-white active">Contact us</a>
      	    		</li>
      	 </ul>
         </div>
 </nav>

 <form method="post">
 <div class="container text-center wrap">
  <div id="loginbox">
   <div class="box">
    <h3 class="text-primary" align="center"><b>Contact Us</b> </h3>
   

    <input type="text" class="form" name="name" placeholder=" Name">
    
    <input type="email" class="form" name="email" placeholder="Email id">
       
    <div class="form-group">
    <label class="exampleFormControlSelect1  text-muted">Bookings For</label>
    <select class="form-control select" name="book" id="exampleFormControlSelect1">
      <option>Wedding shoot</option>
      <option>Pre-Wedding shoot</option>
      <option>Outdoor Shoot</option>
      <option>Portfolios</option>
      <option>Short films</option>
    </select>
  </div>
  <label class="exampleFormControlSelect1  text-muted">date of event</label>
   <input type="date" name="date">

   <div class="form-group select">
    <label class="exampleFormControlSelect1 text-muted">Address</label>
    <textarea class="form-control" name="address" id="exampleFormControlSelect1" rows="3"></textarea>
  </div>
    <!--textarea type="textarea" class="form" name="textarea" placeholder="Message"></textarea-->
    
    

    <button type="submit" class="btn btn-primary text-white But" name="submit">Send Message</button>
       
        <!--button class="facebook"> log in with facebook </button>
         <button class="google"> log in with google</button-->  
    </div>
   </div>
</div>

</form>

<footer class="footer">
<div class="container">
<div class="row">
<div class=" col-lg-4 col-md-4 col-sm-4  col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Find us</h5>
<p class=" text-grey font-weight-bold">
  Aadi studio
</p>
<p><i class="fa fa-location-arrow"></i>     L-31 Adarsh  colony ,Gandhinagar,BHOPAL<br>
                                      (near airport)
 </p>
<p><i class="fa fa-phone"></i>  +91-8085433341 </p>
<p><i class="fa fa fa-envelope"></i> adityasinghrajput862@gmail.com  </p>


</div>


<div class=" col-lg-4 col-md-4 col-sm-4 col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Pages</h5>
<!--headin5_amrc-->
<ul class="footer_ul">
<li><a href="index.html">HOME</a></li>
<li><a href="model.html">MODELS</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="apply.html">APPLY US</a></li>
<li><a href="contact.html">CONTACT US</a></li>

</ul>
</div>

<div class="col-lg-4 col-md-4 col-sm-4  col-12 d-block">
<h4 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Aadistudio.com</h4>

 <p>Hello and welcome to the online home of Aadi Photo Studio,As a professional photography studio, our mission is to professionally integrate creativity into everything we do as well as continue to embrace value-added resources which sets us apart from the competition and make our clients take notice.</p>
              
</div>
</div>
</div>

<div style="background-color:#0b4984">
<p class="text-center">Copyright @2019 | Designed by <b>Aadi</b></p>
<div>
<ul class="social_footer_ul">
<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
</ul>
</div>
</div>

</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	</body>
	</html>