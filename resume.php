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
            <h1>Resume</h1>
            <p class="mb-0">Want to know what I can bring to the table? Check out my resume —
              especially if you're looking for someone dedicated, detail-oriented, and passionate about creative work.
            I’m always open to exciting opportunities and collaborations. 
            </p>
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

    <section id="resume" class="resume section" data-aos="fade-up">
      <div class="container">

      <div class="row align-items-center mb-4">
        <!-- Image Column -->
        <div class="col-md-3 text-center mb-3 mb-md-0">
          <img src="assets/img/profile-img.jpg" alt="Profile Picture" class="img-fluid resume-photo">
        </div>

        <!-- Text + Button Column -->
        <div class="col-md-9">
          <div class="section-title mb-0">
            <h2>Resume</h2>
            <p class="mb-2">IVANA MARIEL BUSTILLOS MILLOSA</p>
            <button class="btn btn-primary download-btn mt-2" data-bs-toggle="modal" data-bs-target="#pdfPreviewModal">
              <i class="bi bi-eye"></i> Preview CV
            </button>
          </div>
        </div>
      </div>


        <div class="row">
          <!-- Left Column -->
          <div class="col-lg-6">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <p><em>A driven and competent individual eager to pursue opportunities that enhance my capabilities, contribute meaningfully, and build a strong foundation for my future career.</em></p>
              <ul>
                <li>Bagong Kampi, San Nicolas III, Bacoor, Cavite</li>
                <li>+639 991 240 3677</li>
                <li>imbmillosa@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>B.S. in Computer Science</h4>
              <h5>2022 - Present</h5>
              <p><em>Cavite State University – Bacoor Campus</em></p>
              <p>Currently a 3rd Year Student</p>
            </div>
            <div class="resume-item">
              <h4>Senior High School</h4>
              <h5>2020 - 2022</h5>
              <p><em>Informatics College Northgate Inc.</em></p>
              <p>Graduated with High Honors</p>
            </div>
            <div class="resume-item">
              <h4>Junior High School</h4>
              <h5>2016 - 2020</h5>
              <p><em>Golden Acres National High School</em></p>
              <p>Graduated with Honors</p>
            </div>

            <h3 class="resume-title">Skills</h3>
            <ul>
              <li>Java (OOP), HTML, CSS, JavaScript, RDBMS, DBMS</li>
              <li>Microsoft Word, Excel, PowerPoint</li>
              <li>Team Collaboration, Adaptability</li>
              <li>Written & Oral Communication, Active Listening</li>
            </ul>

            <h3 class="resume-title">References</h3>
            <ul>
              <li>Ariel Diaz Sas – 0961 098 1015</li>
              <li>Mary Rose Baita – 0961 265 2322</li>
            </ul>
          </div>

          <!-- Right Column -->
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>

            <div class="resume-item">
              <h4>Committee on Information and Communications</h4>
              <h5>2024 - Present</h5>
              <p><em>Central Student Government, Cavite</em></p>
              <ul>
                <li>Managed online presence through scheduled posts and captions.</li>
                <li>Boosted engagement via digital communication strategies.</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>TARA BASA! Tutor</h4>
              <h5>2024 - Present</h5>
              <p><em>DSWD Program, Bacoor</em></p>
              <ul>
                <li>Taught Grade 1 students reading and writing skills.</li>
                <li>Completed a capability-building seminar by the DSWD.</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Secretary</h4>
              <h5>2023 - 2024</h5>
              <p><em>Central Student Government, Cavite</em></p>
              <ul>
                <li>Prepared reports and correspondence.</li>
                <li>Supported various committees within the organization.</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Committee on Records & Documentation</h4>
              <h5>2023</h5>
              <p><em>CSG, Cavite</em></p>
              <ul>
                <li>Drafted proposals and requests.</li>
                <li>Collaborated cross-functionally with other committees.</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Vice President</h4>
              <h5>2016 - 2020</h5>
              <p><em>SSG - Student Volunteer Org, Las Piñas</em></p>
              <ul>
                <li>Edited educational posters and monthly reports.</li>
                <li>Led the creative team in project collaborations.</li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- PDF Preview Modal -->
    <div class="modal fade" id="pdfPreviewModal" tabindex="-1" aria-labelledby="pdfPreviewLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background-color: var(--background-color); color: var(--default-color); border: none;">
          <div class="modal-header">
            <h5 class="modal-title" id="pdfPreviewLabel">Curriculum Vitae Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
          </div>

          <!-- DESKTOP -->
          <div class="modal-body d-none d-md-block" style="height: 80vh;">
            <iframe src="assets/img/MILLOSA-CV.pdf" width="100%" height="100%" style="border: none;"></iframe>
          </div>

          <!-- MOBILE -->
          <div class="modal-body d-block d-md-none text-center">
            <p class="mb-3">PDF preview is not supported on mobile on web view. Please open it in a new tab, click the link below:</p>
            <a href="assets/img/MILLOSA-CV.pdf" target="_blank" class="btn btn-outline-light">
              <i class="bi bi-box-arrow-up-right"></i> Open PDF in New Tab
            </a>
          </div>

          <div class="modal-footer justify-content-between">
            <small class="text-muted">Previewing: MILLOSA-CV.pdf</small>
            <a href="assets/img/MILLOSA-CV.pdf" download class="btn btn-success">
              <i class="bi bi-download"></i> Download CV
            </a>
          </div>
        </div>
      </div>
    </div>


  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>