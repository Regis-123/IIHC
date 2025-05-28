<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission - IIHC SCHOOL</title>

  <!-- CSS Links -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" href="pics/favicon.ico" type="image/x-icon">

  <style>
    .search-highlight {
      background-color: yellow;
      color: black;
      font-weight: bold;
      padding: 2px 4px;
      border-radius: 4px;
    }
    .search-results-container {
      position: absolute;
      top: 80px;
      right: 20px;
      z-index: 1050;
      width: 300px;
    }
  </style>
</head>
<body>

<a href="#main-content" class="visually-hidden focusable">Skip to main content</a>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="Index1.html">
      <img src="pics/LOGO.jpg" alt="IIHC Logo" class="me-2" style="height: 40px;">
      IIHC SCHOOL
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="Index1.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="About Us1.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="programs1.php">Academic</a></li>
        <li class="nav-item"><a class="nav-link" href="Contact1.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="Directory.php">Directory</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="admissionDropdown" data-bs-toggle="dropdown">
            Admission
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registration.php">Registration</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="admission1.php">Admission Info</a></li>
          </ul>
        </li>
      </ul>
      <!-- Search Form -->
      <form class="d-flex ms-lg-3 position-relative" id="navbar-search-form">
        <label for="navbar-search-input" class="visually-hidden">Search</label>
        <input class="form-control me-2" type="search" placeholder="Search..." id="navbar-search-input">
        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
        <div id="search-results-container" class="search-results-container d-none bg-white border rounded shadow p-3"></div>
      </form>
    </div>
  </div>
</nav>

<!-- Page Header -->
<header class="page-header admission-header py-5" style="background: linear-gradient(90deg, var(--gold), var(--secondary-color), #fff); border-bottom-left-radius: 32px; border-bottom-right-radius: 32px;">
  <div class="container text-center">
    <h1 class="section-gradient-heading mb-3" style="font-size:2.5rem;">Senior High School Admission</h1>
    <p class="lead" style="max-width:700px;margin:0 auto;">Welcome to the admission page of IIHC SCHOOL. Find all the information you need to apply.</p>
  </div>
</header>

<main id="main-content">
  <!-- Requirements -->
  <section class="mb-5 section-padding section-blue" data-aos="fade-up">
    <div class="container">
      <h2 class="section-gradient-heading text-center mb-4">Admission Requirements</h2>
      <div class="section-divider"></div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card card-colorful shadow-sm">
            <div class="card-body">
              <ul class="list-unstyled fa-ul mb-0">
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Completed Junior High School (Grade 10).</li>
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Submit an accomplished application form.</li>
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Provide Grade 10 report card or transcript.</li>
                <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Other required documents (e.g., recommendation letters, exam results).</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="mb-5 section-padding section-yellow" data-aos="fade-up">
    <div class="container">
      <h2 class="section-gradient-heading text-center mb-4">Application Process</h2>
      <div class="section-divider"></div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card card-colorful shadow-sm">
            <div class="card-body">
              <ol class="mb-0">
                <li><strong>Step 1:</strong> Apply online at [Website URL]</li>
                <li><strong>Step 2:</strong> Submit documents via email or in person.</li>
                <li><strong>Step 3:</strong> Take the entrance exam (schedule will be announced).</li>
                <li><strong>Step 4:</strong> Attend the interview (if applicable).</li>
                <li><strong>Step 5:</strong> Check admission results online.</li>
                <li><strong>Step 6:</strong> Complete enrollment before the deadline.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Documents -->
  <section class="mb-5 section-padding section-green" data-aos="fade-up">
    <div class="container">
      <h2 class="section-gradient-heading text-center mb-4">Required Documents</h2>
      <div class="section-divider"></div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card card-colorful shadow-sm">
            <div class="card-body">
              <ul class="list-unstyled fa-ul mb-0">
                <li><span class="fa-li"><i class="fas fa-file-alt text-primary"></i></span>Photocopy of Grade 10 Report Card</li>
                <li><span class="fa-li"><i class="fas fa-file-alt text-primary"></i></span>Birth Certificate, Good Moral Certificate, Photos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                        <li><a href="Index1.php">Home</a></li>
                        <li><a href="About Us1.php">About</a></li>
                        <li><a class="active" href="programs1.php">Academic</a></li>
                        <li><a href="Contact1.php">Contact</a></li>
                        <li><a href="Directory.php">Directory</a></li>
                        <li><a href="admission1.php">Admission Info</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
        
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h3>Contact Information</h3>
                        <address>
                            <p><i class="fas fa-map-marker-alt fa-fw me-2"></i> Blk 4 Lot 6 La Forteza Subdivision Camarin Brgy 175 District 1, Philippines</p>
                            <p><i class="fas fa-phone fa-fw me-2"></i> <a href="tel:+09678929232">0967 892 9232</a></p>
                            <p><i class="fas fa-envelope fa-fw me-2"></i> <a href="mailto:iihclaforteza@gmail.com">iihclaforteza@gmail.com</a></p>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <h3>Connect With Us</h3>
                        <div class="social-media-links">
                            <a href="https://www.facebook.com/IIHCLaFortezaOfficialPage" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        
                        </div>
                    </div>
                </div>
                <hr class="my-4"> <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <p>&copy; <span id="current-year"></span> IIHC SCHOOL. All rights reserved.</p> </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a> 
                    </div>
                </div>
            </div>
        </footer>





</main>



  <button id="back-to-top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </button>


<!-- JS Scripts -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, easing: 'ease-in-out', once: true });




      // Back to Top Button
    const backToTopButton = document.getElementById('back-to-top');
    const scrollThreshold = 300; // Pixels scrolled before showing button

    window.addEventListener('scroll', () => {
      if (window.pageYOffset > scrollThreshold) {
        backToTopButton.classList.add('show');
      } else {
        backToTopButton.classList.remove('show');
      }
    });

    backToTopButton.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>




<!-- Search Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchForm = document.getElementById('navbar-search-form');
  const searchInput = document.getElementById('navbar-search-input');
  const resultsContainer = document.getElementById('search-results-container');
  let debounceTimer;

  function escapeRegex(str) {
    return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
  }

  function removeHighlights() {
    document.querySelectorAll('.search-highlight').forEach(span => {
      const parent = span.parentNode;
      parent.replaceChild(document.createTextNode(span.textContent), span);
      parent.normalize();
    });
  }

  function performSearch(query) {
    removeHighlights();
    resultsContainer.innerHTML = '';
    resultsContainer.classList.add('d-none');

    const trimmedQuery = query.trim();
    if (trimmedQuery.length < 3) return;

    const elements = document.querySelectorAll('#main-content p, li, h1, h2, h3, h4, h5, h6, td, th, span, a');
    const results = [];
    let firstMatchEl = null;
    const regex = new RegExp(`(${escapeRegex(trimmedQuery)})`, 'gi');

    elements.forEach(el => {
      const originalHTML = el.innerHTML;
      const textContent = el.textContent;

      if (textContent.toLowerCase().includes(trimmedQuery.toLowerCase())) {
        el.innerHTML = originalHTML.replace(regex, '<span class="search-highlight">$1</span>');
        if (!el.id) el.id = 'search-result-' + Math.random().toString(36).substr(2, 9);
        results.push({ element: el, text: textContent });
        if (!firstMatchEl) firstMatchEl = el;
      }
    });

    if (results.length > 0) {
      resultsContainer.innerHTML = `
        <div class="small mb-2">${results.length} results found</div>
        <div class="list-group">
          ${results.slice(0, 5).map((res, index) => `
            <button type="button" class="list-group-item list-group-item-action search-result-item" data-scroll-to="${res.element.id}">
              Match ${index + 1}: ${res.text.slice(0, 60)}...
            </button>
          `).join('')}
        </div>`;
      resultsContainer.classList.remove('d-none');
      firstMatchEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
    } else {
      resultsContainer.innerHTML = '<div class="small p-2 text-muted">No results found</div>';
      resultsContainer.classList.remove('d-none');
    }
  }

  searchForm.addEventListener('submit', (e) => {
    e.preventDefault();
    performSearch(searchInput.value);
  });

  searchInput.addEventListener('input', () => {
    clearTimeout(debounceTimer);
    if (searchInput.value.length > 2) {
      debounceTimer = setTimeout(() => performSearch(searchInput.value), 250);
    } else {
      removeHighlights();
      resultsContainer.classList.add('d-none');
    }
  });

  resultsContainer.addEventListener('click', (e) => {
    const btn = e.target.closest('.search-result-item');
    if (btn) {
      const targetId = btn.getAttribute('data-scroll-to');
      const targetEl = document.getElementById(targetId);
      if (targetEl) {
        targetEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        resultsContainer.classList.add('d-none');
      }
    }
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('#navbar-search-form') && !e.target.closest('#search-results-container')) {
      resultsContainer.classList.add('d-none');
    }
  });
});
</script>

</body>
</html>
