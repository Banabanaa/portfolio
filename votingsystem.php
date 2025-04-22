<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body class="index-page dark-theme">
  <?php include 'includes/header.php'; ?>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>CvSU Voting System</h1>
              <p class="mb-0">Collaboratively developed with my team, this system integrates multiple programming languages to deliver a robust and effective voting experience.</p>

              <div class="container mt-1 mb-0">
                <div class="tech-strip-wrapper">
                <div class="tech-strip d-flex justify-content-center flex-wrap gap-3 py-2">
                    <?php
                        $techs = [
                        ['HTML', 'html5/html5-original.svg'],
                        ['CSS', 'css3/css3-original.svg'],
                        ['MongoDB', 'mongodb/mongodb-original.svg'],
                        ['JavaScript', 'javascript/javascript-original.svg']
                        ];

                        foreach ($techs as $tech) {
                        echo '<span class="badge rounded-pill bg-light text-dark border px-3 py-2 d-flex align-items-center">'
                            . '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/' . $tech[1] . '" width="20" class="me-2">'
                            . $tech[0]
                            . '</span>';
                        }
                    ?>
                    </div>
                </div>
                </div>

            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="projects.php">Go Back</a></li>
            <li class="current">CvSU Voting System</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Project Details Section -->
    <section id="gallery-details" class="gallery-details section">

        <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoplay": {
                "delay": 5000
                },
                "slidesPerView": "auto",
                "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
                },
                "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
                }
            }
            </script>
            <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
                <img src="assets/img/projects/votesys.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/votesys1.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/votesys2.png" alt="">
            </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>CvSU Voting System</h2>
                  <p>
                  This project, a voting system is a platform designed to provide a smooth, secure, and reliable voting experience for students at Cavite State University - Bacoor City Campus. The system allows the Commission on Student Elections (COMSELEC), to efficiently manage the entire electoral process, from voter registration to tallying results.
                  </p>
                  <p>
                  Administrators can create voter accounts, add candidates, view vote tallies, and update voter information. These features ensure full control, transparency, and accuracy in the election process. The system is designed to maintain the integrity of the elections and provide administrators with an easy-to-use interface for managing the election.
                  </p>
                  <p>
                  The voting system also includes a user interface for students to cast their votes. The voting process is user-friendly and allows students to vote with ease and confidence, ensuring a seamless election experience.
                  </p>
            </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
                  <ul>
                  <li><strong>Category</strong> Web Development / Election Management</li>
                  <li><strong>Client</strong> CvSU Registrar</li>
                  <li><strong>Tech Stack</strong> PHP, CSS, HTML, JavaScript, MongoDB</li>
                  <li><strong>Project date</strong> April - June 2024</li>
                  <li><a href="https://github.com/Banabanaa/votesystem" class="btn-visit align-self-start"><i class="bi bi-github"></i>Visit Git Repository</a></li>
                  </ul>
            </div>
            </div>

        </div>

        </div>

    </section>

  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>