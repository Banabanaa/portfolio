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
              <h1>YOU DO NOTE</h1>
              <p class="mb-0">This project was built with my groupmates, we used the following programming languages to successfully make this:</p>

              <div class="container mt-1 mb-0">
                <div class="tech-strip-wrapper">
                <div class="tech-strip d-flex justify-content-center flex-wrap gap-3 py-2">
                    <?php
                        $techs = [
                          ['Python', 'python/python-original.svg'],
                          ['HTML', 'html5/html5-original.svg'],
                          ['Django', 'django/django-plain.svg'],
                          ['CSS', 'css3/css3-original.svg']
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
            <li class="current">CvSU Website</li>
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
                <img src="assets/img/projects/youdonote.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/youdonote2.png" alt="">
            </div>

            <div class="swiper-slide">
                <img src="assets/img/projects/youdonote3.png" alt="">
            </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
            <h2>YOU DO NOTE - Note Taking App</h2>
                <p>
                The You Do Note System is a simple yet powerful tool designed to help users efficiently create, edit, and organize their notes. Whether for personal tasks, professional projects, or educational purposes, the app allows users to quickly capture information, create to-do lists, and manage important tasks with ease.
                </p>
                <p>
                With its intuitive and user-friendly interface, You Do Note ensures that users can access and organize their notes effortlessly. The system makes it easy to stay on top of tasks, set reminders, and keep track of important information, making it an ideal solution for anyone looking to improve productivity and stay organized.
                </p>
            </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                <li><strong>Category</strong> Web Development</li>
                <li><strong>Language</strong> Python, HTML, CSS, Django</li>
                <li><strong>Project date</strong>January 2025</li>
                <li><a href="https://github.com/Banabanaa/you-do-note" class="btn-visit align-self-start"><i class="bi bi-github"></i>Visit Git Repository</a></li>
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