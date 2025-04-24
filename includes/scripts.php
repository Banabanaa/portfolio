<!-- Vendor JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS -->
<script src="assets/js/include.js"></script>
<script src="assets/js/main.js"></script>

<script>
  const toggleBtn = document.getElementById("theme-toggle");
  const icon = toggleBtn.querySelector("i");

  const savedTheme = localStorage.getItem("theme");

  if (savedTheme === "light") {
    document.body.classList.add("light-theme");
    icon.classList.remove("bi-moon-stars-fill");
    icon.classList.add("bi-sun-fill");
  } else {
    document.body.classList.add("dark-theme");
    icon.classList.remove("bi-sun-fill");
    icon.classList.add("bi-moon-stars-fill");
  }

  // for the dark/light mode
  toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");
    document.body.classList.toggle("light-theme");

    const isLight = document.body.classList.contains("light-theme");
    localStorage.setItem("theme", isLight ? "light" : "dark");

    if (isLight) {
      icon.classList.remove("bi-moon-stars-fill");
      icon.classList.add("bi-sun-fill");
    } else {
      icon.classList.remove("bi-sun-fill");
      icon.classList.add("bi-moon-stars-fill");
    }
  });
</script>

<script>
    const form = document.getElementById("contact-form");
    const responseBox = document.getElementById("form-response");
  
    form.addEventListener("submit", async (e) => {
      e.preventDefault();
  
      const formData = new FormData(form);
      const response = await fetch(form.action, {
        method: "POST",
        body: formData,
        headers: { Accept: "application/json" }
      });
  
      if (response.ok) {
        form.reset();
        responseBox.innerHTML = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
      } else {
        responseBox.innerHTML = '<div class="alert alert-danger">Something went wrong. Please try again later.</div>';
      }
    });
  </script>

<script>
  // active page
  document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('#navmenu a');
    const currentPage = window.location.pathname.split('/').pop();

    navLinks.forEach(link => {
      const linkPage = link.getAttribute('href');
      if (linkPage === currentPage) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  });
</script>

<script>
  const tabs = document.querySelectorAll(".tab");
  const panes = document.querySelectorAll(".tab-pane");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const target = tab.getAttribute("data-tab");
      panes.forEach(pane => {
        pane.classList.toggle("active", pane.id === target);
      });
    });
  });
</script>
