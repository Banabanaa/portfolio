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
            <h1>CvSU Enrollment System</h1>
              <p class="mb-0">This project was executed in partnership with my colleagues, leveraging various programming languages to achieve a seamless and efficient solution.</p>


              <div class="container mt-1 mb-0">
                <div class="tech-strip-wrapper">
                <div class="tech-strip d-flex justify-content-center flex-wrap gap-3 py-2">
                    <?php
                        $techs = [
                          ['CSS', 'css3/css3-original.svg'],
                          ['JavaScript', 'javascript/javascript-original.svg'],
                          ['PHP', 'php/php-original.svg'],
                          ['Laravel', 'laravel/laravel-original.svg'],
                          ['HTML', 'html5/html5-original.svg'],
                          ['Figma', 'figma/figma-original.svg'],
                          ['MySQL', 'mysql/mysql-original.svg']
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
            <li class="current">CvSU Enrollment System</li>
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
                <img src="assets/img/projects/es2.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es1.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es3.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es4.png" alt="">
            </div>            
            
            <div class="swiper-slide">
                <img src="assets/img/projects/es5.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es6.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es7.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/es8.png" alt="">
            </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
                <h2>Cavite State University - Bacoor City Campus Enrollment System</h2>
                <p>
                We hosted this project for a month using Hostinger but unfortunately, our domain expired but you can still check out the github repository for this project by clicking the button on the right side of your screen.
                </p>
                <p>
                This was developed to adapt a modern digital platform to 
                streamline the enrollment process, reduce administrative workload, and improve accessibility 
                for students. This project has 4 users, students, registrar, department and super admin.
                </p>

                <p>
                •	Student Module: To allow students to log in, enroll in courses, view their schedules, and track their academic progress, students will be able to view grades, enrolled subjects, and access Certificates of Registration (COR).
                </p>

                <p>
                •	Enrollment Management Module: To enable administrators and registration advisers to track student records and update enrollment details efficiently.
                </p>

            </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                <li><strong>Category</strong> Web Development / Educational Tool</li>
                <li><strong>Client</strong> CvSU Registrar</li>
                <li><strong>Tech Stack</strong> Laravel, PHP, CSS, HTML, JavaScript, MySQL</li>
                <li><strong>Project date</strong> November 2024 - January 2025</li>
                <li><a href="https://github.com/Banabanaa/enrollment-system" class="btn-visit align-self-start"><i class="bi bi-github"></i>Visit Git Repository</a></li>
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