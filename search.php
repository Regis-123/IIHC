<?php
$query = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Search Results for "<?php echo $query; ?>" - IIHC SCHOOL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Stylesheets -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
<link rel="icon" href="pics/favicon.ico" type="image/x-icon" />

<!-- Your search highlight styles -->
<style>
.search-highlight {
    background-color: rgba(255, 215, 0, 0.5);
    padding: 0 2px;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}
.search-highlight:hover {
    background-color: rgba(255, 215, 0, 0.8);
}
#client-side-results {
    margin-top: 20px;
}
</style>
</head>
<body>
<!-- Navigation -->
<?php include('navbar.php'); ?>

<main class="container py-5">
<h1 class="mb-4">Search Results for "<?php echo $query; ?>"</h1>

<!-- Search Form -->
<form action="search.php" method="get" class="mb-4">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search the site..." value="<?php echo $query; ?>">
        <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i> Search
        </button>
    </div>
</form>

<!-- Search Results -->
<div id="search-results">
<?php if (empty($query)): ?>
    <div class="alert alert-info">Please enter a search term.</div>
<?php else: ?>
    <div class="alert alert-warning">
        Full site search is coming soon. Currently searching visible content on this page only.
    </div>
    <div id="client-side-results"></div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const query = <?php echo json_encode($query); ?>; // safely encode for JS
        if (query) {
            const resultsContainer = document.getElementById('client-side-results');
            const searchableElements = document.querySelectorAll('p, li, h1, h2, h3, h4, h5, h6, td, th, a, span, .card-text');
            const results = [];
            const lowerQuery = query.toLowerCase();

            searchableElements.forEach(el => {
                const originalHTML = el.innerHTML;
                const text = el.textContent;

                if (text.toLowerCase().includes(lowerQuery)) {
                    // Highlight matches in the HTML
                    const regex = new RegExp(`(${escapeRegex(query)})`, 'gi');

                    // Replace only the matched text in the innerHTML
                    const newHTML = originalHTML.replace(regex, '<span class="search-highlight">$1</span>');
                    
                    // Save original HTML for later reset if needed
                    el.innerHTML = newHTML;

                    // Create snippet (first 150 chars of plain text)
                    const snippetText = text.length > 150 ? text.substring(0, 150) + '...' : text;

                    // Generate result card
                    results.push(`
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">${el.tagName.toLowerCase()} in ${getSectionName(el)}</h5>
                                <p class="card-text">${escapeHTML(snippetText)}</p>
                                ${el.id ? `<a href="#${el.id}" class="btn btn-sm btn-outline-primary">Go to section</a>` : ''}
                            </div>
                        </div>
                    `);
                }
            });

            if (results.length > 0) {
                resultsContainer.innerHTML = `<div class="mb-3 fw-bold">Found ${results.length} result(s):</div>` + results.join('');
            } else {
                resultsContainer.innerHTML = `<div class="alert alert-info">No matches found on this page.</div>`;
            }
            resultsContainer.style.display = 'block';

            // Helper functions
            function escapeRegex(string) {
                return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
            }

            function escapeHTML(str) {
                const div = document.createElement('div');
                div.textContent = str;
                return div.innerHTML;
            }

            function getSectionName(element) {
                let parent = element.parentElement;
                while (parent) {
                    if (parent.tagName === 'SECTION' || parent.classList.contains('section')) {
                        const heading = parent.querySelector('h2, h3, h4');
                        return heading ? heading.textContent.trim() : 'Unnamed Section';
                    }
                    parent = parent.parentElement;
                }
                return 'Page';
            }
        }
    });
    </script>
<?php endif; ?>
</div>
</main>

<!-- Footer -->
<?php include('footer.php'); ?>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>