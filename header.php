<?php 

require('connection/connections.php');
$con = "SELECT * FROM home, navigations, social_media, about, personal_info";
$query = mysqli_query($db, $con);
$user_data = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $user_data['title'];?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- *** Header *** -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $user_data['title'];?></a></h1>
      <h2><?php echo $user_data['subtitle'];?></h2>

      <nav id="navbar" class="navbar">
        <ul>

        <?php if($user_data['home_section']){?>
          <li><a class="nav-link active" href="#header">Home</a></li>
        <?php };?>
        <?php if($user_data['about_section']){?>
          <li><a class="nav-link" href="#about">About</a></li>
        <?php };?>
        <?php if($user_data['resume_section']){?>
          <li><a class="nav-link" href="#experience">Experience</a></li>
        <?php };?>
        <?php if($user_data['contact_section']){?>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        <?php };?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
      
      if($user_data['icons']) {
        ?>

      <div class="social-links">
      <?php if($user_data['github']!=''){?>
        <a href="https://github.com/<?php echo $user_data['github'];?>" class="github" target="_blank"><i class="bi bi-github"></i></a>
      <?php };?>
      <?php if($user_data['facebook']!=''){?>
        <a href="https://facebook.com/<?php echo $user_data['facebook'];?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
      <?php };?>
      <?php if($user_data['linkedin']!=''){?>
        <a href="https://linkedin.com/<?php echo $user_data['linkedin'];?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
      <?php };?>
      </div>

        <?php
      }
      
      ?>

      

    </div>
  </header><!-- End Header -->