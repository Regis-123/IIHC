<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Portal - Resources</title>
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="icon" href="pics/favicon.ico" type="image/x-icon">
</head>
<body>
  <button id="sidebar-toggle" aria-label="Toggle sidebar"><i class="fas fa-bars"></i></button>

  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <h2><i class="fas fa-graduation-cap"></i> Student Portal</h2>
    </div>
    <ul>
      <li><a href="dashboard.php"><i class="fas fa-chart-line"></i> Dashboard</a></li>
      <li><a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a></li>
      <li><a href="courses.php"><i class="fas fa-book"></i> Courses</a></li>
      <li><a href="grades.php"><i class="fas fa-file-alt"></i> Grades</a></li>
      <li><a href="announcements.php"><i class="fas fa-bullhorn"></i> Announcements</a></li>
      <li><a href="resources.php" class="active"><i class="fas fa-folder"></i> Resources</a></li>
      <li><a href="calendar.php"><i class="fas fa-calendar-week"></i> Calendar</a></li>
      <li><a href="Index1.php" style="color: white;"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="programs1.php" style="color: white;"><i class="fas fa-list-alt"></i> Tracks</a></li>
      <li><a href="About Us1.php" style="color: white;"><i class="fas fa-info-circle"></i> About</a></li>
      <li><a href="Contact1.php" style="color: white;"><i class="fas fa-phone"></i> Contact</a></li>
    </ul>
  </div>

  <div class="main">
    <header>
      <div id="greeting">Welcome!</div>
      <button onclick="logout('login.html')" class="logout-button">
        <i class="fas fa-sign-out-alt"></i> Log Out
      </button>
    </header>

    <div class="dashboard-content">
      <section id="resources-section">
        <div class="section-header">
          <h2><i class="fas fa-folder"></i> Academic Resources</h2>
        </div>

        <h3 class="resource-category-header"><i class="fas fa-book-open"></i> Textbooks & Lecture Notes</h3>
        <div class="resource-grid" id="textbooks-notes-list">
          </div>

        <h3 class="resource-category-header"><i class="fas fa-flask"></i> Lab Manuals & Guides</h3>
        <div class="resource-grid" id="lab-guides-list">
          </div>

        <h3 class="resource-category-header"><i class="fas fa-tools"></i> Software & Tools</h3>
        <div class="resource-grid" id="software-tools-list">
          </div>

        <h3 class="resource-category-header"><i class="fas fa-link"></i> External Links</h3>
        <div class="resource-grid" id="external-links-list">
          </div>

      </section>
    </div>
  </div>

  <script>
    // Get logged-in user from local storage or default to "Student"
    const user = localStorage.getItem("loggedInUser") || "Student";
    document.getElementById("greeting").textContent = `Welcome, ${user}!`;

    // Function to handle user logout
    function logout(redirectUrl) {
      localStorage.removeItem("loggedInUser");
      window.location.href = redirectUrl; // Redirect to login page
    }

    // Dummy data for resources, categorized
    const resources = {
      'textbooks-notes': [
        {
          title: 'Physics Textbook (PDF)',
          description: 'Comprehensive textbook for Introduction to Physics. Covers mechanics, thermodynamics, and electromagnetism.',
          link: '#', // Replace with actual PDF link
          icon: 'fas fa-file-pdf'
        },
        {
          title: 'Calculus I Lecture Notes',
          description: 'Detailed notes from Calculus I lectures, including examples and practice problems.',
          link: '#', // Replace with actual link
          icon: 'fas fa-sticky-note'
        },
        {
          title: 'Chemistry Fundamentals e-Book',
          description: 'An interactive e-book covering basic chemistry principles and reactions.',
          link: '#',
          icon: 'fas fa-book'
        }
      ],
      'lab-guides': [
        {
          title: 'Biology Lab Manual',
          description: 'Instructions and procedures for all Biology lab experiments.',
          link: '#',
          icon: 'fas fa-vial'
        },
        {
          title: 'Chemistry Lab Safety Guide',
          description: 'Essential safety guidelines for working in the chemistry laboratory.',
          link: '#',
          icon: 'fas fa-exclamation-triangle'
        }
      ],
      'software-tools': [
        {
          title: 'Microsoft Office 365 (Student Access)',
          description: 'Access to Word, Excel, PowerPoint, and more for academic use.',
          link: 'https://www.microsoft.com/en-us/education/products/office',
          icon: 'fas fa-laptop-code'
        },
        {
          title: 'Grammarly Premium (University License)',
          description: 'Enhance your writing with advanced grammar and plagiarism checks.',
          link: 'https://www.grammarly.com/',
          icon: 'fas fa-spell-check'
        }
      ],
      'external-links': [
        {
          title: 'University Library Catalog',
          description: 'Search for books, journals, and other resources in the university library.',
          link: 'https://library.example.edu', // Replace with actual library link
          icon: 'fas fa-university'
        },
        {
          title: 'Academic Support Center',
          description: 'Get help with tutoring, writing, and study skills.',
          link: 'https://academicsupport.example.edu', // Replace with actual link
          icon: 'fas fa-hands-helping'
        },
        {
          title: 'Student Handbook',
          description: 'Official guide to university policies, procedures, and student life.',
          link: '#',
          icon: 'fas fa-handbook'
        }
      ]
    };

    // Function to populate resources into their respective sections
    function populateResources() {
      for (const category in resources) {
        const resourceListDiv = document.getElementById(`${category}-list`);
        if (resourceListDiv) {
          let resourcesHTML = '';
          resources[category].forEach(resource => {
            resourcesHTML += `
              <div class="resource-card">
                <h3><i class="${resource.icon}"></i> ${resource.title}</h3>
                <p>${resource.description}</p>
                <a href="${resource.link}" target="_blank" class="resource-link">
                  Access Resource <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            `;
          });
          resourceListDiv.innerHTML = resourcesHTML;
        }
      }
    }

    // Initial load: populate resources
    document.addEventListener('DOMContentLoaded', populateResources);

    // Sidebar toggle functionality (copied from dashboard.html)
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    if (sidebarToggle) {
      sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
      });
      // Optional: close sidebar when clicking outside
      document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
          sidebar.classList.remove('open');
        }
      });
    }
  </script>
</body>
</html>
