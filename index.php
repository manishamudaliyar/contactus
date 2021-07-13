<?php
include "connection.php";
?>

<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<center>
<body background="images/contact.png">  
  
  <!-- Contact section-->
<section id="contact-section">
<div class="container">
<div class="col-lg-9">
  <h2><b>Contact Us</b></h2>
     <p>Email us and keep upto date with our latest news</p>
   
   <!-- first grid section-->
	<div class="py-3">
<div class="container">
<div class="col-lg-9">
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="email"><font color="ffffff">First Name:</font></label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname">
    </div>
	<div class="form-group">
      <label for="email"><font color="ffffff">Last Name:</font></label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
    </div>
    <div class="form-group">
      <label for="email"><font color="ffffff">Email:</font></label>
      <input type="email" class="form-control"  id="email" placeholder="Enter email id" name="email">
    </div>
	<div class="form-group">
      <label for="email"><font color="ffffff">Subject:</font></label>
      <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject">
    </div>
	<div class="form-group">
      <label for="email"><font color="ffffff">Message:</font></label>
      <input type="text" class="form-control" cols="8" rows="8" id="message" placeholder="Enter message" name="message">
    </div>
    <button type="submit"  name="insert" class="btn btn-primary"> Submit </button>
  </form>
</div>
</div>
<br>

<div class="contact-form">
   <!-- second grid section-->
   
   <div>
    <font color="ffffff"><i class="fa fa-map-marker"></i><span class="form-info"> Bandra(w) Mumbai </span></font><br>
	<font color="ffffff"><i class="fa fa-phone"></i><span class="form-info"> Phone no +919874456123/789/101 </span></font><br>
	<font color="ffffff"><i class="fa fa-envelope"></i><span class="form-info"> ManishaMudaliyar123@gmail.com </span></font><br>
	</div>
   
</section>
  
<?php

if(isset($_POST["insert"]))
{
   mysqli_query($link,"insert into info values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[subject]','$_POST[message]')");
}
?>
</html>