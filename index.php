<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body class="index-page dark-theme">
  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-left" data-aos-delay="200">
            <div class="home-img">
              <img src="assets/img/pfp.png" alt="Ivana profile">
            </div>
          </div>

          <div class="col-lg-6 order-2 order-lg-1 text-center" data-aos="fade-right" data-aos-delay="100">
            <div class="hero-text">
              <h2><span>I am </span><span class="underlight">Ivana Mariel Millosa</span><br>a Computer <span>Science Student at CvSU-B</span></h2>
              <p>A 3rd year college Computer Science student exploring the world of technology.
                There are no limits of what we can achieve by dreaming, and making that dream into reality.</p>
              <a href="contact.php" class="btn-get-started">LET'S WORK TOGETHER!</a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- First Row: Personal Info -->
        <div class="row gy-4 align-items-center">
          <div class="col-lg-5">
            <img src="assets/img/profile-img.jpg" class="img-fluid rounded shadow">
          </div>
          <div class="col-lg-7 content">
            <h2>Aspiring Freelancer, UI/UX Designer, &amp; Web Developer.</h2>
            <p class="fst-italic py-3">
              I'm currently open to freelance opportunities — feel free to reach out via email to explore how we can work together.
            </p>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>3 April 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+639 91 240 3677</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bacoor, Cavite</span></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>imbmillosa@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              As an aspiring freelancer, I'm deeply passionate about building websites that help brands, businesses, institutions, and startups grow through strategic, user-focused web solutions. 
              I specialize in creating intuitive, visually compelling designs and scalable web applications tailored to each client’s needs.
            </p>
            <p class="m-0">
              I’m someone who embraces challenges and isn’t afraid to take risks to grow. While I tend to overthink, it allows me to spot details and recognize problems early on. 
              Being slightly introverted helps me stay focused, observant, and thoughtful in how I work. These traits allow me to approach tasks with clarity, intention, and a strong sense of responsibility.
            </p>
          </div>
        </div>

        <!-- Divider -->
        <hr class="my-5">

        <div class="row gy-4 align-items-center flex-lg-row-reverse">
          <div class="col-lg-5">
            <!-- Carousel / Slideshow -->
            <div id="familyCarousel" class="carousel slide shadow rounded" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/img/family1.jpg" class="d-block w-100 rounded" alt="Family photo 1">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/family2.jpg" class="d-block w-100 rounded" alt="Family photo 2">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/family3.jpg" class="d-block w-100 rounded" alt="Family photo 3">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/family4.jpg" class="d-block w-100 rounded" alt="Family photo 4">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/family5.jpg" class="d-block w-100 rounded" alt="Family photo 5">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#familyCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#familyCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
          <div class="col-lg-7">
            <p class="mb-0">
              Coming from a broken family has shaped much of who I am today. My mother separated from us early on, and since then, 
              I've been deeply motivated to focus on my studies and personal growth. With my father working hard as a technician and my older brother 
              supporting a family of his own, I’ve felt a strong responsibility to contribute and make something meaningful out of my journey. 
              These experiences have instilled in me a sense of resilience, purpose, and a deep drive to succeed—not just for myself, but for the people who believe in me.
            </p>
          </div>
        </div>

      </div>
    </section>


  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>