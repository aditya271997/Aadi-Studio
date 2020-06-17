<?php
include 'conn.php';
 $id = $_GET['id'];

 $qry = "DELETE FROM `contact2` WHERE id = $id";

 mysqli_query($con,$qry);

 header('location:d.php');
 ?> 