<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Faculty & Staff Directory</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <link rel="stylesheet" href="style.css">
             <link rel="icon" href="pics/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <a href="#mainHeader" class="visually-hidden focusable">Skip to main content</a>
            <button id="back-to-top" class="back-to-top" aria-label="Back to top">
                <i class="fas fa-arrow-up"></i>
            </button>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="Index1.php">
                            <img src="pics/LOGO.jpg" alt="IIHC School Logo" class="me-2" style="height:40px; border-radius:50%;">
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
                                <li class="nav-item"><a class="nav-link" href="Contact1.php">Contact</a></li>
                                <li class="nav-item"><a class="nav-link active" href="Directory.php">Directory</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
                                        <li><a class="dropdown-item" href="registration.php">Registration</a></li>
                                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                                        <li><hr class="dropdown-divider"></li>
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
<div id="search-results-container" class="position-absolute bg-white p-3 shadow rounded mt-1 d-none" style="z-index: 1000; width: 300px; right: 15px;"></div>
                        </div>
                    </div>
                </nav>
            </header>

            <main>
                <header id="mainHeader" class="text-center mb-4 mx-auto bg-white shadow-lg rounded-xl p-4">
                    <h1 class="fw-bold text-primary mb-2" style="font-size:2.2rem;">Faculty & Staff Directory</h1>
                    <p class="text-secondary">Meet our dedicated <span class="fw-semibold text-primary">Senior High School</span> team!</p>
                </header>

                <section id="mainSection" class="directory-section container bg-white shadow-lg rounded-xl p-4 my-5">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card h-100 text-center shadow" style="background-color: rgb(220, 255, 220);">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <img src="pics/female1.jpg" alt="Ms. Sarah Davis" class="rounded-circle mb-3 border border-4 border-success" style="width:120px; height:120px; object-fit:cover;">
                                    <h3 class="card-title fw-bold text-primary mb-1">Ms. Sarah Davis</h3>
                                    <p class="text-primary fw-semibold mb-1">History Teacher</p>
                                    <p class="text-muted mb-2">Administration</p>
                                    <div id="bio-sarah-davis" class="mt-2 w-100" style="display:none;">
                                    </div>
                                    <div id="bio-sarah-davis-content" class="mt-2 w-100">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card h-100 text-center shadow" style="background-color: rgb(220, 255, 220);">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <img src="pics/m1.jpg" alt="Mr. David Chen" class="rounded-circle mb-3 border border-4 border-success" style="width:120px; height:120px; object-fit:cover;">
                                    <h3 class="card-title fw-bold text-success mb-1">Mr. David Chen</h3>
                                    <p class="text-success fw-semibold mb-1">Head of Science & Technology Department</p>
                                    <p class="text-muted mb-2">Senior High School - STEM Track</p>

                                    <div id="bio-david-chen" class="mt-2 w-100" style="display:none;">

                                    </div>
                                        <div id="bio-david-chen-content" class="mt-2 w-100">
                                            </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card h-100 text-center shadow" style="background-color: rgb(220, 255, 220);">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <img src="pics/female2.jpg" alt="Ms. Emily Lee" class="rounded-circle mb-3 border border-4 border-success" style="width:120px; height:120px; object-fit:cover;">
                                    <h3 class="card-title fw-bold text-purple mb-1">Ms. Emily Lee</h3>
                                    <p class="text-purple fw-semibold mb-1">Humanities & Social Sciences Teacher</p>
                                    <p class="text-muted mb-2">Senior High School - HUMSS Track</p>
                                    <div id="bio-emily-lee" class="mt-2 w-100" style="display:none;">
                                    </div>
                                    <div id="bio-emily-lee-content" class="mt-2 w-100">
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card h-100 text-center shadow" style="background-color: rgb(220, 255, 220);">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <img src="pics/m2.jpg" alt="Mr. Alex Garcia" class="rounded-circle mb-3 border border-4 border-success" style="width:120px; height:120px; object-fit:cover;">
                                    <h3 class="card-title fw-bold text-warning mb-1">Mr. Alex Garcia</h3>
                                    <p class="text-warning fw-semibold mb-1">Arts & Design/Sports Coordinator</p>
                                    <p class="text-muted mb-2">Senior High School - Arts & Design/Sports</p>
                                    <div id="bio-alex-garcia" class="mt-2 w-100" style="display:none;">
                                    </div>
                                        <div id="bio-alex-garcia-content" class="mt-2 w-100">
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card h-100 text-center shadow" style="background-color: rgb(220, 255, 220);">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <img src="pics/female3.jpg" alt="Ms. Jessica Kim" class="rounded-circle mb-3 border border-4 border-success" style="width:120px; height:120px; object-fit:cover;">
                                    <h3 class="card-title fw-bold text-info mb-1">Ms. Jessica Kim</h3>
                                    <p class="text-info fw-semibold mb-1">Senior High School Counselor</p>
                                    <p class="text-muted mb-2">Student Support</p>
                                    <div id="bio-jessica-kim" class="mt-2 w-100" style="display:none;">
                                    </div>
                                     <div id="bio-jessica-kim-content" class="mt-2 w-100">
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card h-100 text-center shadow" style="background-color: rgb(220, 255, 220);">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <img src="pics/m3.jpg" alt="Mr. Robert Brown" class="rounded-circle mb-3 border border-4 border-success" style="width:120px; height:120px; object-fit:cover;">
                                    <h3 class="card-title fw-bold text-indigo mb-1">Mr. Robert Brown</h3>
                                    <p class="text-indigo fw-semibold mb-1">Accountancy, Business & Management Teacher</p>
                                    <p class="text-muted mb-2">Senior High School - ABM Track</p>
                                    <div id="bio-robert-brown" class="mt-2 w-100" style="display:none;">
                                    </div>
                                    <div id="bio-robert-brown-content" class="mt-2 w-100">
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

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
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <p>&copy; <span id="current-year"></span> IIHC SCHOOL. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a> 
                        </div>
                    </div>
                </div>
            </footer>

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
                    <p>In accordance with the Data Privacy Act of 2012 (RA 10173), IIHC School is committed to protecting your personal data. This notice outlines how we collect, use, and safeguard your information.</p>
                    <p>We collect information necessary for enrollment, academic activities, and communication. This may include your name, contact details, academic records, and other relevant information.</p>
                    <p>Your data is used for administrative purposes, to provide educational services, and to keep you informed about school-related activities. We do not share your personal information with third parties except when required by law or with your explicit consent.</p>
                    <p>We implement security measures to protect your data from unauthorized access, disclosure, alteration, or destruction.</p>
                    <p>You have the right to access, correct, and request the deletion of your personal data, subject to certain limitations. For any inquiries or concerns regarding your data privacy, please contact our Data Protection Officer at <a href="mailto:dataprivacy@iihcschool.edu">dataprivacy@iihcschool.edu</a>.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Highlight current page in navbar
        document.querySelectorAll('.nav-link').forEach(link => {
            const linkPath = new URL(link.href, window.location.origin).pathname;
            const currentPath = window.location.pathname;
            if (currentPath.endsWith(linkPath) || (currentPath === '/' && linkPath === '/Index1.php')) {
                link.classList.add('active');
                link.setAttribute('aria-current', 'page');
            } else {
                link.classList.remove('active');
                link.removeAttribute('aria-current');
            }
        });
        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        const scrollThreshold = 300;
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
        // Update copyright year
        document.getElementById('current-year').textContent = new Date().getFullYear();

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
