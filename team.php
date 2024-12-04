<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>our Team</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <?php foreach ($team as $row) { ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="admin/<?php echo $row['img']; ?>" class="img-fluid" alt="">
              <div class="social">
                <a href="<?php echo $row['twiter']; ?>"><i class="bi bi-twitter-x"></i></a>
                <a href="<?php echo $row['facebook']; ?>"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo $row['instagram']; ?>"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo $row['linkdin']; ?>"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4><?php echo $row['name']; ?></h4>
              <span><?php echo $row['role']; ?></span>
            </div>
          </div>
        </div><!-- End Team Member -->

      <?php } ?>



    </div>

  </div>

</section><!-- /Team Section -->