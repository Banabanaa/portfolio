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
              <h1>Contact</h1>
              <p class="mb-0">Thanks for stopping by! If you think we’d make a great team or you just have something to share, don’t hesitate to get in touch.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Go Back</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>San Nicolas 3, Bacoor, Cavite</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call</h3>
                  <p>+639 991 240 3677</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>imbmillosa@gmail.com</p>
                </div>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <form id="contact-form" action="https://formspree.io/f/mgveyypb" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
            </div>
    
            <div class="col-md-6">
              <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
            </div>
    
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Email address" required>
            </div>
    
            <div class="col-md-6">
              <input type="tel" name="phone" class="form-control" placeholder="Phone number">
            </div>
    
            <div class="col-md-12">
              <textarea name="message" class="form-control" rows="6" placeholder="Type your message here." required></textarea>
            </div>
    
            <div class="col-md-12 text-center">
              <div id="form-response"></div>
    
              <button type="submit" class="btn btn-primary">SEND</button>
              <button type="reset" class="btn btn-secondary">CLEAR</button>
            </div>
          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>
