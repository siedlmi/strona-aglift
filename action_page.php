<!DOCTYPE html>
<html>
<title>AG LIFT Andrzej Granicki</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/changew3.css">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="icon" href="data:,">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.html#home" class="w3-bar-item w3-button"><span class="w3-black"><b>AG</b></span> Lift</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#offer" class="w3-bar-item w3-button">Oferta</a>
      <a href="#projects" class="w3-bar-item w3-button">Realizacje</a>
      <a href="#about" class="w3-bar-item w3-button">O Nas</a>
      <a href="#contact" class="w3-bar-item w3-button">Kontakt</a>
    </div>
  </div>
</div>

<?php 
$name =  "";

if(isset($_POST['submit'])){
    $to = "mi.siedlecki@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $body = $_POST['Body'];
    $message = $name . " wrote the following:" . "\n\n" . $body;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

<body>
<header>
    <div class="w3-display-middle w3-margin-top w3-center">
<h1><?= "Mail Sent. Thank you " . $name . ", we will contact you shortly."; ?></h1>
</div>

</header>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
    <span>AG LIFT Andrzej Granicki</span></br>
    <span>ul. Mokotowska 46</span>
    <span>00-543 Warszawa</span></br>
    <span>telefon: (+48) 505-247-015</span></br>
    <i class="fa fa-envelope"> </i><a href="mailto:andrzej.granicki@aglift.pl">andrzej.granicki@aglift.pl </a></br>
    <i class="fa fa-envelope"> </i><a href="mailto:biuro@aglift.pl">biuro@aglift.pl</a>
    <p>Made by Nextnode Michał Siedlecki and Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a> in 2021</p>
</footer>
</body>
</html>