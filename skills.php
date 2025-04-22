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
              <h1>Skills</h1>
              <p class="mb-0">Over time, I’ve built up a toolkit of both technical and creative skills from designing clean,
                user-friendly interfaces to bringing them to life through programming. </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Go Back</a></li>
            <li class="current">Skills</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Skills Section -->
    <section class="skills-section py-5" data-aos="fade-up">
        <div class="container">
            
            <div class="row justify-content-center mb-5">
            <!-- desktop -->
            <div class="d-none d-lg-flex col-auto justify-content-center gap-4">
                <img src="assets/img/portraitpic.jpg" alt="Portrait 1" class="img-fluid rounded shadow skill-img-centered">
                <img src="assets/img/portraitpic2.jpg" alt="Portrait 2" class="img-fluid rounded shadow skill-img-centered">
                <img src="assets/img/portraitpic3.JPG" alt="Portrait 3" class="img-fluid rounded shadow skill-img-centered">
                <img src="assets/img/portraitpic4.jpg" alt="Portrait 4" class="img-fluid rounded shadow skill-img-centered">
            </div>

            <!-- mobile -->
            <div class="d-lg-none">
                <div id="portraitCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/img/portraitpic.jpg" class="d-block w-100 rounded shadow skill-img-centered" alt="Portrait 1">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/portraitpic2.jpg" class="d-block w-100 rounded shadow skill-img-centered" alt="Portrait 2">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/portraitpic3.JPG" class="d-block w-100 rounded shadow skill-img-centered" alt="Portrait 2">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/portraitpic4.jpg" class="d-block w-100 rounded shadow skill-img-centered" alt="Portrait 2">
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#portraitCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#portraitCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                </div>
            </div>
            </div>

            <div class="row text-center mb-5" data-aos="zoom-in">
            <div class="col-lg-10 mx-auto">
                <h2 class="mb-4">My Growth</h2>
                <p class="lead">As a student developer, I’ve developed a versatile set of skills with the help of my instructors over the years.</p>
            </div>
            </div>

            <div class="row text-start gx-4 gy-4">
            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">
                <h5><i class="fas fa-laptop-code me-2"></i>Frontend</h5>
                <ul class="custom-skill-list">
                <li><i class="fab fa-html5 me-2"></i>HTML, CSS, JavaScript</li>
                <li><i class="fab fa-react me-2"></i>React, Next.js</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <h5><i class="fas fa-server me-2"></i>Backend</h5>
                <ul class="custom-skill-list">
                <li><i class="fab fa-java me-2"></i>Java (OOP), Node.js, PHP, Python</li>
                <li><i class="fas fa-code-branch me-2"></i>Django, Laravel</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <h5><i class="fas fa-database me-2"></i>Databases & Tools</h5>
                <ul class="custom-skill-list">
                <li><i class="fas fa-database me-2"></i>MySQL, MongoDB</li>
                <li><i class="fas fa-file-alt me-2"></i>MS Word, Excel, PowerPoint</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <h5><i class="fas fa-users me-2"></i>Soft Skills</h5>
                <ul class="custom-skill-list">
                <li><i class="fas fa-handshake me-2"></i>Team Collaboration</li>
                <li><i class="fas fa-comments me-2"></i>Written & Oral Communication</li>
                <li><i class="fas fa-ear-listen me-2"></i>Active Listening</li>
                </ul>
            </div>
            </div>

            <br><br>

            <div class="row justify-content-center align-items-center mb-5" data-aos="fade-up" data-aos-delay="150">
            <div class="col-auto text-center text-lg-end">
                <img src="assets/img/bana.JPG" alt="Profile Picture" class="rounded-circle shadow" style="width: 250px; height: 250px; object-fit: cover;">
            </div>
            <div class="col-lg-8 col-md-10 mt-4 mt-lg-0">
                <div class="p-4 rounded shadow" style="background-color: var(--nav-dropdown-background-color); color: var(--contrast-color); border-radius: 20px;">
                <p class="lead">
                    As a consistent student leader from elementary through college, I’ve developed strong skills in team collaboration, adaptability, conflict resolution, and strategic thinking. Leading diverse groups has taught me how to listen actively, communicate clearly, and foster environments where everyone can thrive. These experiences shaped my ability to work effectively under pressure and adapt to changing circumstances with confidence.
                    <br><br>
                    Alongside my leadership roles, I’ve also been a consistent honor student, driven by a deep commitment to excellence, discipline, and continuous improvement. This academic foundation sharpened my critical thinking and problem solving.
                </p>
                </div>
            </div>
            </div>

        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates">
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">Trainings and Certificates</h2>
            <p class="lead">A showcase of some of my achievements and credentials.</p>
        </div>
        </div>

        <div class="certificates-grid">

        <div class="certificate-item">
            <img src="assets/img/certs/cert1.jpg" alt="Certificate 1" class="img-fluid">
            <div class="certificate-links">
            <a href="assets/img/certs/cert1.jpg" class="glightbox" 
                data-title="Three-day Seminar: Building the Next Leader" 
                data-description="During this time, I was the secretary of our organization who helped make the event work smoothly.">
                <i class="bi bi-arrows-angle-expand"></i>
            </a>
            </div>
        </div>

        <div class="certificate-item">
            <img src="assets/img/certs/cert2.jpg" alt="Certificate 2" class="img-fluid">
            <div class="certificate-links">
            <a href="assets/img/certs/cert2.jpg" class="glightbox" 
                data-title="2nd DCS Technellence Awards" 
                data-description="President's Lister with a GWA of 1.20.">
                <i class="bi bi-arrows-angle-expand"></i>
            </a>
            </div>
        </div>

        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert3.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert3.jpg" 
                data-title="Leadership Summit 2023" 
                data-description="I participated in a seminar about leadership which helped me gain experience in team collaboration." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>

        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert4.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert4.jpg" 
                data-title="Three-day Seminar: Building the Next Leader" 
                data-description="I participated in a 3-day seminar about leadership which helped me gain exceptional insights about what it takes to become a leader." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>
        
        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert9.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert9.jpg" 
                data-title="2024 Financial Planning Workshop" 
                data-description="This workshop strenghtened my knowledge about fund allocation in the highest governing body of the campus." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>

        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert5.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert5.jpg" 
                data-title="Certificate of Appreciation" 
                data-description="This was awarded to me for being the overall most active committe in our organization." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>
  
        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert6.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert6.jpg"
                data-title="3rd DCS Technellence Award" 
                data-description="Vice President's Lister with a GWA of 1.25." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>
        
        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert7.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert7.jpg" 
                data-title="Certificate of Recognition - ComRecs" 
                data-description="This recognition was given to me for being the most active committee on Records & Documentation." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>

        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert8.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert8.jpg" 
                data-title="Gawad Parangal 2023" 
                data-description="This award was presented to me for being the Top 1 Overall for 1st Year BSCS Students A.Y 2022-2023." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
            </div>
        </div>

        <div class="col-custom-5">
            <div class="certificate-item h-100">
            <img src="assets/img/certs/cert10.jpg" class="img-fluid" alt="Certificate 1">
            <div class="certificate-links d-flex align-items-center justify-content-center">
                <a href="assets/img/certs/cert10.jpg" 
                data-title="Informatics - With High Honors" 
                data-description="I practiced diligence in order to meet all of the academic demands during my SHS." 
                class="glightbox preview-link">
                <i class="bi bi-arrows-angle-expand"></i>
                </a>
            </div>
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