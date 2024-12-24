<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoGiants - Free softwares and information</title>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K8W9KJP22E"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-K8W9KJP22E');
    </script>
    <script>
    document.getElementById('toggle-theme').addEventListener('click', function() {
        var htmlElm = document.getElementByTag('html');
        
        // Toggle between light and dark theme
        if (htmlElm.getAttribute('data-bs-theme') === 'light') {
            themeStylesheet.setAttribute('data-bs-theme', 'dark');
            this.innerText = 'Switch to Dark Mode';
        } else {
            themeStylesheet.setAttribute('data-bs-theme', 'light');
            this.innerText = 'Switch to Light Mode';
        }
    });
</script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .card-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      z-index: 1;
    }
    .card-body {
      position: relative;
    }
    .card-disabled {
      pointer-events: none; /* Disable interactions */
      opacity: 0.6; /* Reduce opacity to indicate it's disabled */
    }
  </style>
</head>
<body class="d-flex flex-column" style="min-height: 100vh;">
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

    <main role="main" class="mt-5">

      <section class="jumbotron text-center">
    <div class="container">
        <h3 class="jumbotron-heading">Welcome to Our Utility Hub</h3>
        <p class="lead text-muted">Explore a collection of powerful tools designed to simplify your daily tasks. From image compression to file conversions, we offer quick and efficient solutions to meet your needs. Browse through our utilities below and experience the convenience of easy-to-use, web-based tools.</p>
        <p>
            <!--<a href="#" class="btn btn-primary my-2">Start Using Tools</a>-->
            <!--<a href="#" class="btn btn-primary my-2">Learn More</a>-->
        </p>
    </div>
</section>


      <div class="album py-5">
  <div class="container">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h5 class="card-title">Image Compressor</h5>
            <p class="card-text">Effortlessly reduce image sizes while preserving quality for faster uploads and optimized storage.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/image_compresser" class="btn btn-sm btn-primary">Use Tool</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body position-relative">
            <h5 class="card-title">Tool 2</h5>
            <p class="card-text">Effortlessly to do something useful using this tool for faster uploads and optimized storage..</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-primary">Use Tool</a>
              </div>
            </div>
            <div class="card-overlay">Coming Soon</div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body position-relative">
            <h5 class="card-title">Tool 3</h5>
            <p class="card-text">Effortlessly to do something useful using this tool for faster uploads and optimized storage..</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-primary">Use Tool</a>
              </div>
            </div>
            <div class="card-overlay">Coming Soon</div>
          </div>
        </div>
      </div>
      
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body position-relative">
            <h5 class="card-title">Tool 4</h5>
            <p class="card-text">Effortlessly to do something useful using this tool for faster uploads and optimized storage.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-primary">Use Tool</a>
              </div>
            </div>
            <div class="card-overlay">Coming Soon</div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body position-relative">
            <h5 class="card-title">Tool 5</h5>
            <p class="card-text">Effortlessly to do something useful using this tool for faster uploads and optimized storage..</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-primary">Use Tool</a>
              </div>
            </div>
            <div class="card-overlay">Coming Soon</div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body position-relative">
            <h5 class="card-title">Tool 6</h5>
            <p class="card-text">Effortlessly to do something useful using this tool for faster uploads and optimized storage..</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-primary">Use Tool</a>
              </div>
            </div>
            <div class="card-overlay">Coming Soon</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


    </main>
    <footer class="text-muted">
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
