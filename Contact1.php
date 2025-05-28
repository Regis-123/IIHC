<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - IIHC SCHOOL</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="icon" href="pics/favicon.ico" type="image/x-icon">
</head>

<body>

  <a href="#main-content" class="visually-hidden focusable">Skip to main content</a>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="Index1.php">
        <img src="pics/LOGO.jpg" alt="IIHC Logo" class="me-2" style="height: 40px;" />
        IIHC SCHOOL
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="Index1.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="About Us1.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="programs1.php">Academic</a></li>
          <li class="nav-item"><a class="nav-link active" href="Contact1.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="Directory.php">Directory</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Admission</a>
            <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
              <li><a class="dropdown-item" href="registration.php">Registration</a></li>
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="admission1.php">Admission Info</a></li>
            </ul>
          </li>
        </ul>
       <form class="d-flex ms-lg-3" id="navbar-search-form">
                        <label for="navbar-search-input" class="visually-hidden">Search</label>
                        <input class="form-control me-2" type="search"  placeholder="Search..." aria-label="Search"  id="navbar-search-input"
        name="query">
            <button class="btn btn-outline-primary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="page-header contact-header"
    style="background: linear-gradient(90deg, var(--soft-green, #e0f7e9) 0%, var(--soft-yellow, #fffbe7) 100%);">
    <div class="container">
      <h1 class="section-gradient-heading">Get in Touch</h1>
      <p class="lead">We'd love to hear from you! Contact us for inquiries, admissions, or any other questions.</p>
    </div>
  </header>

  <!-- Main Content -->
  <main id="main-content">
    <section class="section-padding" style="background: linear-gradient(135deg, #e3fff1 0%, #fff9e3 100%); border-radius: 18px;" data-aos="fade-up">
      <div class="container" style="background: linear-gradient(120deg, #e3fff1 60%, #fff9e3 100%); border-radius: 18px; box-shadow: 0 4px 32px rgba(32,201,151,0.07); padding: 32px 18px;" data-aos="fade-up" data-aos-delay="100">
        <div class="row contact-row-equal" data-aos="fade-up" data-aos-delay="200">
          <!-- Contact Info -->
          <div class="col-lg-6 mb-4">
            <div class="contact-info-card">
              <h2 class="section-gradient-heading" data-aos="fade-right">Contact Information</h2>
              <address>
                <p>
                  <i class="fas fa-map-marker-alt me-2"></i>
                  <a href="https://maps.google.com/?q=IHC+La+Forteza+Campus,+Blk+4+Lot+6+La+Forteza+Subdivision,+Camarin,+Brgy+175,+District+1,+Philippines"
                     target="_blank" rel="noopener">
                    IHC La Forteza Campus, Blk 4 Lot 6 La Forteza Subdivision, Camarin, Brgy 175, District 1, Philippines
                  </a>
                </p>
                <p><i class="fas fa-phone-alt me-2"></i> Phone: <a href="tel:+639678929232">0967 892 9232</a></p>
                <p><i class="fas fa-envelope me-2"></i> Email: <a
                    href="mailto:iihclaforteza@gmail.com">iihclaforteza@gmail.com</a></p>
              </address>
              <div class="social-media-links mt-3">
                <a href="javascript:void(0);" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="javascript:void(0);" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="javascript:void(0);" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0);" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="javascript:void(0);" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>

          <!-- Map -->
          <div class="col-lg-6 mb-4">
            <div class="map-container">
              <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
                <span style="height: 4px; width: 40px; background: linear-gradient(90deg, #10b981, #f59e0b); border-radius: 2px; margin-right: 10px;"></span>
                <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: #f59e0b; background: #e3fff1; border-radius: 50%; padding: 8px 12px; box-shadow: 0 2px 8px rgba(245,158,11,0.08);"></i>
                <span style="height: 4px; width: 40px; background: linear-gradient(90deg, #f59e0b, #10b981); border-radius: 2px; margin-left: 10px;"></span>
              </div>
              <h2>Our Location</h2>
              <div class="ratio ratio-16x9" style="min-height:300px;">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!4v1747842284111!6m8!1m7!1sYwtVcTPC1zeTFHX3VB9sOg!2m2!1d14.75906529217416!2d121.0437370678762!3f273.44019800785776!4f-16.259878966861038!5f0.7820865974627469"
                  style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center mt-4">
          <div class="col-lg-8">
            <div class="contact-form">
              <!-- Decorative divider with icon -->
              <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
                <span style="height: 4px; width: 40px; background: linear-gradient(90deg, #10b981, #f59e0b); border-radius: 2px; margin-right: 10px;"></span>
                <i class="fas fa-envelope-open-text" style="font-size: 2rem; color: #2563eb; background: #fff9e3; border-radius: 50%; padding: 8px 12px; box-shadow: 0 2px 8px rgba(37,99,235,0.08);"></i>
                <span style="height: 4px; width: 40px; background: linear-gradient(90deg, #f59e0b, #10b981); border-radius: 2px; margin-left: 10px;"></span>
              </div>
              <h2>Send Us a Message</h2>
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="name" required />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" required />
                </div>
                <div class="mb-3">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" />
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Your Message</label>
                  <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h3>IIHC COLLEGE</h3>
          <p>Providing quality senior high school education...</p>
        </div>
        <div class="col-md-4 mb-4">
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
        <div class="col-md-4 mb-4">
          <h3>Contact Us</h3>
          <address>
            <p><i class="fas fa-map-marker-alt me-2"></i> Blk 4 Lot 6 La Forteza Subdivision, Camarin, Brgy 175,
              District 1, Philippines</p>
            <p><i class="fas fa-phone-alt me-2"></i> 0967 892 9232</p>
            <p><i class="fas fa-envelope me-2"></i> <a href="mailto:iihclaforteza@gmail.com">iihclaforteza@gmail.com</a>
            </p>
          </address>
        </div>
      </div>
      <hr />
      <div class="d-flex justify-content-between align-items-center flex-column flex-md-row">
        <p class="mb-2 mb-md-0">© 2025 by IIHC COLLEGE. All rights reserved.</p>
        <div class="footer-legal-links">
          <a href="#" class="footer-link" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a> |
        
        </div>
      </div>
    </div>
  </footer>

  <!-- Privacy Policy Modal -->
  <div class="modal fade privacy-popup" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyPolicyModalLabel">
            <i class="fas fa-lock me-2"></i> Privacy Notice
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>In accordance with the Data Privacy Act of 2012 (RA 10173), IIHC SCHOOL would like to obtain your consent for:</p>
          <ul class="privacy-list mb-3">
            <li>Collection and processing of student information</li>
            <li>Use of educational records and academic data</li>
            <li>Website analytics and performance tracking</li>
            <li>School communications and updates</li>
          </ul>
          <p>Our website uses necessary cookies to enhance your browsing experience and help us improve our services.</p>
          <div class="contact-info mt-3">
            <p class="mb-2"><small>For privacy concerns, contact our Data Protection Officer:</small></p>
            <p class="mb-1"><small><i class="fas fa-envelope me-2"></i>iihclaforteza@gmail.com</small></p>
            <p class="mb-0"><small><i class="fas fa-phone me-2"></i>0967 892 9232</small></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">I ACCEPT</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Scripts -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // Initialize AOS animation library
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true, // Only animate once
      mirror: false // Do not repeat animations on scroll up
    });

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

    // Privacy Policy Modal functionality
    document.addEventListener('DOMContentLoaded', () => {
        // Get all privacy policy links
        const privacyLinks = document.querySelectorAll('[data-bs-target="#privacyPolicyModal"]');
        
        // Get modal element
        const modalElement = document.getElementById('privacyPolicyModal');
        
        if (modalElement) {
            // Initialize Bootstrap modal
            const modal = new bootstrap.Modal(modalElement);
            
            // Add click handlers to all privacy policy links
            privacyLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    modal.show();
                });
            });
            
            // Handle modal cleanup on hide
            modalElement.addEventListener('hidden.bs.modal', function () {
                document.body.classList.remove('modal-open');
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
                const backdrop = document.querySelector('.modal-backdrop');
                if (backdrop) backdrop.remove();
            });
        }
    });
  </script>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.getElementById('navbar-search-form');
    const searchInput = document.getElementById('navbar-search-input');

    // Create container for search results
    const resultsContainer = document.createElement('div');
    resultsContainer.id = 'search-results-container';
    resultsContainer.className = 'search-results-container position-absolute bg-white border p-2 rounded d-none';
    resultsContainer.style.top = '60px';
    resultsContainer.style.right = '20px';
    resultsContainer.style.width = '300px';
    resultsContainer.style.zIndex = '1050';
    document.body.appendChild(resultsContainer);

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

      const elements = document.querySelectorAll('p, li, h1, h2, h3, h4, h5, h6, td, th, a, span, .card-text');
      const results = [];
      let firstMatchedElement = null;

      const regex = new RegExp(`(${escapeRegex(trimmedQuery)})`, 'gi');

      elements.forEach(el => {
        const originalHTML = el.innerHTML;
        const text = el.textContent;

        if (text.toLowerCase().includes(trimmedQuery.toLowerCase())) {
          // Highlight all matches
          el.innerHTML = originalHTML.replace(regex, '<span class="search-highlight">$1</span>');
          
          // Assign a unique ID if none
          if (!el.id) {
            el.id = 'search-highlight-' + Math.random().toString(36).substr(2, 9);
          }
          
          results.push({ element: el, text: text });
          
          // Remember the first match
          if (!firstMatchedElement) {
            firstMatchedElement = el;
          }
        }
      });

      if (results.length > 0) {
        resultsContainer.innerHTML = `
          <div class="small text-muted mb-2">${results.length} results found</div>
          <div class="search-results-list">
            ${results.slice(0, 5).map((res, index) => `
              <div class="search-result-item" style="cursor:pointer;" data-scroll-to="${res.element.id}">Match ${index + 1}</div>
            `).join('')}
          </div>
        `;
        resultsContainer.classList.remove('d-none');

        // Scroll to the first match
        if (firstMatchedElement && firstMatchedElement.id) {
          document.getElementById(firstMatchedElement.id).scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      } else {
        resultsContainer.innerHTML = '<div class="text-muted p-2">No results found</div>';
        resultsContainer.classList.remove('d-none');
      }
    }

    // Event listeners
    searchForm.addEventListener('submit', e => {
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

    resultsContainer.addEventListener('click', e => {
      const item = e.target.closest('.search-result-item');
      if (item) {
        const targetId = item.getAttribute('data-scroll-to');
        const targetEl = document.getElementById(targetId);
        if (targetEl) {
          targetEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        resultsContainer.classList.add('d-none');
      }
    });

    document.addEventListener('click', e => {
      if (!e.target.closest('#navbar-search-form') && !e.target.closest('#search-results-container')) {
        resultsContainer.classList.add('d-none');
      }
    });
  });
</script>
</body>
</html>