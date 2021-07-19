<?php

include ("./header.php");

?>

  <!-- *** About Section *** -->
  <section id="about" class="about">

    <!-- *** About Me *** -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>About me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/<?php echo $user_data['profile_pic']?>" class="img-fluid" alt="Profile Picture">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $user_data['about_title'];?></h3>
          <p class="fst-italic">
          <?php echo $user_data['about_subtitle'];?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>

              <?php 

                $con = "SELECT * FROM personal_info WHERE id between 8 and 10";
                $query = mysqli_query($db, $con);

                while($info = mysqli_fetch_array($query)) {

              ?> 

                <li><i class="bi bi-arrow-right-circle-fill"></i> <strong><?php echo $info['personal_label'];?>:</strong> <span><?php echo $info['personal_val'];?></span></li>

              <?php };?>

              </ul>
            </div>
            <div class="col-lg-6">
              <ul>

              <?php 

                $con = "SELECT * FROM personal_info WHERE id between 14 and 16";
                $query = mysqli_query($db, $con);

                while($info = mysqli_fetch_array($query)) {

              ?> 

                <li><i class="bi bi-arrow-right-circle-fill"></i> <strong><?php echo $info['personal_label'];?>:</strong> <span><?php echo $info['personal_val'];?></span></li>

              <?php };?>

              </ul>
            </div>
          </div>
          <p>
          <?php echo $user_data['about_desc'];?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- *** Skills  *** -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">

      <?php 

        $con = "SELECT * FROM skills";
        $query = mysqli_query($db, $con);

        while($skills = mysqli_fetch_array($query)) {

      ?>

          <div class="progress">
            <span class="skill"><?php echo $skills['skill_name'];?> <i class="val"><?php echo $skills['skill_level'];?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills['skill_level'];?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
      <?php };?>
          

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- *** Interests *** -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-caret-right-square" style="color: #ffbb2c;"></i>
            <h3>Dancing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-laptop" style="color: #5578ff;"></i>
            <h3>Photoshop</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-easel" style="color: #e80368;"></i>
            <h3>Video Editing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="bi bi-cpu" style="color: #e361ff;"></i>
            <h3>Programming</h3>
          </div>
        </div>

    </div><!-- End Interests -->


  </section><!-- End About Section -->

  <!-- *** Resume Section *** -->
  <section id="experience" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Experience</h2>
        <p>Employment History</p>
        <a href="./download.php?file=resume.pdf" class="d-flex justify-content-center link-info" target="_blank">Download CV</a>
      </div>

      <div class="row">
        <div class="col-lg-6">

        <?php 

          $con = "SELECT * FROM experience";
          $query = mysqli_query($db, $con);

          while($type = mysqli_fetch_array($query)) {
            if($type['type'] == 's') {
        ?>


          <h3 class="resume-title">Junior PHP developer</h3>
          <div class="resume-item pb-0">
            <h4><?php echo $type['company'];?></h4>
            <h5><?php echo $type['time'];?></h5>
            <p><em><?php echo $type['desc'];?></em></p>
            <p>
            <ul>
              <li><?php echo $type['task'];?></li>
            </ul>
            </p>
            </div>
            <?php } };?>

            <?php 

              $con = "SELECT * FROM experience WHERE id ='8'";
              $query = mysqli_query($db, $con);

              while($type = mysqli_fetch_array($query)) {
                if($type['type'] == 'e') {
            ?>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4><?php echo $type['company'];?></h4>
            <h5><?php echo $type['time'];?></h5>
            <p><?php echo $type['desc'];?></p>
            <p><em><?php echo $type['location'];?></em></p>
          </div>
        </div>
        <?php } };?>

        <div class="col-lg-6">

        <?php 

          $con = "SELECT * FROM experience WHERE id ='1'";
          $query = mysqli_query($db, $con);

          while($type = mysqli_fetch_array($query)) {
            if($type['type'] == 'p') {
        ?>

          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4><?php echo $type['company'];?></h4>
            <h5><?php echo $type['time'];?></h5>
            <p><em><?php echo $type['location'];?></em></p>
            <p>     
            <ul>
              <li><?php echo $type['task'];?></li>
            </ul>
            </p>
          </div>
          <?php } };?>

          <?php 

            $con = "SELECT * FROM experience WHERE id ='5'";
            $query = mysqli_query($db, $con);

            while($type = mysqli_fetch_array($query)) {
              if($type['type'] == 'p') { 

          ?>
          
            <div class="resume-item">
              <h4><?php echo $type['company'];?></h4>
              <h5><?php echo $type['time'];?></h5>
              <p><em><?php echo $type['location'];?></em></p>
              <p>     
              <ul>
                <li><?php echo $type['task'];?></li>
              </ul>
              </p>
              </p>
            </div>
          <?php } };?>

          <?php 

            $con = "SELECT * FROM experience WHERE id ='7'";
            $query = mysqli_query($db, $con);

            while($type = mysqli_fetch_array($query)) {
              if($type['type'] == 'p') { 

            ?>


            <div class="resume-item">
              <h4><?php echo $type['company'];?></h4>
              <h5><?php echo $type['time'];?></h5>
              <p><em><?php echo $type['location'];?></em></p>
              <p>     
              <ul>
                <li><?php echo $type['task'];?></li>
              </ul>
              </p>
              </p>
            </div>
            <?php } };?>
        </div>
      </div>
      
    </div>
  </section><!-- End Resume Section -->


  <!-- *** Contact Section *** -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

      <?php
      
      $con = "SELECT * FROM contact_details, social_media";
      $query = mysqli_query($db, $con);
      $user_data = mysqli_fetch_array($query);
            
      
      ?>


        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3><?php echo $user_data['contact_add'];?></h3>
            <p><?php echo $user_data['contact_add_info'];?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Links</h3>
            <?php
      
            if($user_data) {
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
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3><?php echo $user_data['contact_email'];?></h3>
            <p><?php echo $user_data['contact_email_info'];?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3><?php echo $user_data['contact_num'];?></h3>
            <p><?php echo $user_data['contact_num_info'];?></p>
          </div>
        </div>
  </section><!-- End Contact Section -->

  <?php
  
  include ("./footer.php");
  
  ?>