<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoGiants - QR Code Generator Tool</title>
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    // Check the theme stored in localStorage on page load
    var savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        $('html').attr('data-bs-theme', savedTheme);
        if (savedTheme === 'dark') {
            $('#toggle-theme').text('Switch to Light Mode');
        } else {
            $('#toggle-theme').text('Switch to Dark Mode');
        }
    }

    // Toggle theme when the button is clicked
    $('#toggle-theme').click(function() {
        var htmlElm = $('html');
        
        // Toggle between light and dark theme
        if (htmlElm.attr('data-bs-theme') === 'light') {
            htmlElm.attr('data-bs-theme', 'dark');
            $(this).text('Switch to Light Mode');
            localStorage.setItem('theme', 'dark');  // Save dark mode preference
        } else {
            htmlElm.attr('data-bs-theme', 'light');
            $(this).text('Switch to Dark Mode');
            localStorage.setItem('theme', 'light');  // Save light mode preference
        }
    });
});
</script>

<body>
<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Brand and tagline section -->
        <a href="https://infogiants.com/" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708"/>
            </svg>
            <span class="ms-2 fs-4 text-white">InfoGiants </span><span class="fs-6 text-white ms-3 mt-1"> - Free softwares and information</span>
        </a>
        <button id="toggle-theme" class="btn btn-secondary">Switch to Dark Mode</button>
        <!-- Navbar Toggler -->
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
    </div>
</div>


    </header>
<div class="container mt-5">
    <h2 class="text-center mb-4">QR Code Generator</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="generate_qr.php" method="POST">
                <div class="mb-3">
                    <label for="image" class="form-label">Enter Data for QR Code (URL, Text, etc.)</label>
                    <input type="text" class="form-control" id="qrData" name="qrData" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Generate QR Code</button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="text-muted position-fixed bottom-0 w-100">
      <div class="container">
         <div class="row p-4">
             <div class="col col-md-10">
                 <p><?php echo date("Y"); ?> &copy; InfoGiants, All rights reserved.</p>
             </div>
             <div class="col col-md-2 text-end">
                 <a href="#" class="text-secondary">Back to top</a>
             </div>
         </div>
      </div>
    </footer>

<!-- Bootstrap JS and dependencies -->
<script type="text/javscript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script type="text/javscript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
