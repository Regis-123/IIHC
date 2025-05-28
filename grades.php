<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grades | Student Portal</title>
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
      <li><a href="grades.php" class="active"><i class="fas fa-file-alt"></i> Grades</a></li>
      <li><a href="announcements.php"><i class="fas fa-bullhorn"></i> Announcements</a></li>
      <li><a href="resources.php"><i class="fas fa-folder"></i> Resources</a></li>
      <li><a href="calendar.php"><i class="fas fa-calendar-week"></i> Calendar</a></li>
      <li><a href="Index1.php"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="programs1.php"><i class="fas fa-list-alt"></i> Tracks</a></li>
      <li><a href="About Us1.php"><i class="fas fa-info-circle"></i> About</a></li>
      <li><a href="Contact1.php"><i class="fas fa-phone"></i> Contact</a></li>
    </ul>
  </div>

  <div class="main">
    <header>
      <div id="greeting">Welcome!</div>
      <button onclick="logout()" class="logout-button">
        <i class="fas fa-sign-out-alt"></i> Log Out
      </button>
    </header>

    <div class="dashboard-content">
      <section id="grades-section">
        <h2><i class="fas fa-file-alt"></i> My Grades</h2>
        <div class="card">
          <table>
            <thead>
              <tr>
                <th><i class="fas fa-book"></i> Course</th>
                <th><i class="fas fa-star"></i> Grade</th>
              </tr>
            </thead>
            <tbody id="grades-table-body">
              <!-- Grades will be populated by JS -->
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>

  <script>
    // Get logged-in user
    const user = localStorage.getItem("loggedInUser") || "Student";
    document.getElementById("greeting").textContent = `Welcome, ${user}!`;

    // Log out function
    function logout() {
      localStorage.removeItem("loggedInUser");
      window.location.href = "login.html";
    }

    // Dummy grades data (replace with real data if available)
    const grades = JSON.parse(localStorage.getItem('studentCourses')) || [
      { name: 'Introduction to Physics', grade: 92 },
      { name: 'Calculus I', grade: 88 },
      { name: 'Chemistry', grade: 95 },
      { name: 'English Composition', grade: 90 }
    ];

    // Populate grades table
    const tbody = document.getElementById('grades-table-body');
    grades.forEach(course => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${course.name}</td>
        <td><strong>${course.grade}</strong></td>
      `;
      tbody.appendChild(tr);
    });

    // Sidebar toggle functionality
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    if (sidebarToggle) {
      sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
      });
      document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
          sidebar.classList.remove('open');
        }
      });
    }
  </script>
</body>
</html>