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
            <img src="assets/img/pfp2.jpg" class="img-fluid rounded shadow">
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
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+63 991 240 3677</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bacoor, Cavite</span></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>imbmillosa@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Hobbies:</strong> <span>Crochet, Billiards</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              As an aspiring freelancer, I'm deeply passionate about building websites that help brands, businesses, institutions, and startups grow through strategic, user-focused web solutions. 
              I specialize in creating intuitive, visually compelling designs and scalable web applications tailored to each client’s needs.
            </p>
            <p class="m-0">
            I’m someone who finds joy in exploring ideas, whether if it’s through digital design or hands-on hobbies like arts and crafts (crochet), or 
            even a game of billiards. These things help fuel my creativity. I tend to overthink sometimes, 
            but that also means I notice the little details and catch issues early on. I’m naturally introverted, which allows me to stay focused and 
            intentional in how I work. Every project I take on is a chance to grow, connect, and create with a strong sense of purpose and responsibility.</p>
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
                  <img src="assets/img/fam/fam4.jpg" class="d-block w-100 rounded" alt="friends 1">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/fam/fam5.jpg" class="d-block w-100 rounded" alt="friends 2">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/fam/fam3.jpg" class="d-block w-100 rounded" alt="friends 3">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/fam/fam2.jpg" class="d-block w-100 rounded" alt="friends 4">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/fam/fam1.jpg" class="d-block w-100 rounded" alt="friends 5">
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
              Coming from a broken family has shaped much of who I am today. My mother separated from us when I was a teenager, and since then, 
              I've been deeply motivated to focus on my studies and personal growth. With my father working hard as a technician and my older brother 
              supporting a family of his own, I’ve felt a strong responsibility to contribute and make something meaningful out of my journey. 
              These experiences have instilled in me a sense of resilience, purpose, and a deep drive to succeed—not just for myself, but for the people who believe in me.
            </p><br>
            <p>Because of everything I’ve been through, I’ve come to really appreciate my friends. They’ve become like my second 
              family, my rock—always there when I need them. Spending time with them keeps me grounded, and honestly, I don’t know where I’d be without them.
              And then there are my two cats, Luna and Iris. They’re sweet but a little bit naughty, they’ve been with me through it all, 
              keeping me warm (literally and emotionally), when I'm with them, I am reminded to slow down and enjoy the little moments.</p>
          </div>
        </div>

      </div>
    </section>


  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>