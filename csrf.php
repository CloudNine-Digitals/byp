<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Tools | CloudNine Digital</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Online Tools</span>
                    <span class="logo-subtitle">CloudNine Digital</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>CloudNine Tools</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Pentester
                        <span class="category__btn transparent-btn" title="Tools_List">
                            <span class="sr-only">Tools List</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="posts.html">CSRF Online</a>
                        </li>
                        <li>
                            <a href="new-post.html">JavaScript Overlay</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Programming
                        <span class="category__btn transparent-btn" title="Tools list">
                            <span class="sr-only">Tools list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="categories.html">Live Coding</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon image" aria-hidden="true"></span>Networking
                        <span class="category__btn transparent-btn" title="Tools list">
                            <span class="sr-only">Tools list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="media-01.html">WhoIs Checker</a>
                        </li>
                        <li>
                            <a href="media-02.html">Domain to IP</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon paper" aria-hidden="true"></span>Encryption
                        <span class="category__btn transparent-btn" title="Tools list">
                            <span class="sr-only">Tools list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="pages.html">PHP Obfuscator</a>
                        </li>
                        <li>
                            <a href="new-page.html">Base64 Decode</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a class="show-cat-btn" href="##">
                <span class="icon paper" aria-hidden="true"></span>Other Tools
                <span class="category__btn transparent-btn" title="Open list">
                <span class="sr-only">Open list</span>
                <span class="icon arrow-down" aria-hidden="true"></span>
                </span>
                </a>
                <ul class="cat-sub-menu">
                <li>
                <a href="pages.html">All pages</a>
                </li>
                <li>
                <a href="new-page.html">Add new page</a>
                </li>
                </ul>
                </li>
            </ul>
            <span class="system-menu__title">Menu Lainnya</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Privacy & Policy</a>
                </li>
                <li>
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Disclaimer</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Setyo Wibowo ID</span>
                <span class="sidebar-user__subtitle">Admin CloudNine Digital</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</nav>

<body>
  <div class="layer"></div>
<main class="page-center">
  <div class="card shadow mb-3">
  <div class="card-header py-3">
  <center>
  <h6 class="m-0 font-weight-bold text-primary"><?php echo str_replace("_", " ", "$judul"); ?></h6>
  </center>
  </div>
  <form method="post">
  <div class="card-body">
  <div class="form-group">
  <label for="url">URL:</label>
  <input type="url" name="url" id="url" class="form-control text-danger" placeholder="http://www.target.com/[path]/upload.php" autocomplete="off" required>
  </div>
  <div class="form-group">
  <label for="pf">POST FILE:</label>
  <input type="text" name="pf" id="pf" class="form-control text-danger" placeholder="Filedata / files[] / qqfile / userfile / uploadfile / dll" autocomplete="off" required>
  </div>
  <center>
  <button type="submit" name="d" class="btn btn-outline-info">Lock The Target</button>
  </center>
  </div>
  </form>
  </div>
  
  <?php
  if (isset($_POST['d'])) {
  // Sanitize input to prevent XSS or malicious code
  $url = htmlspecialchars($_POST['url']);
  $pf = htmlspecialchars($_POST['pf']);
  
  // Display the locked status message
  echo "<div class='alert alert-success text-center'>
  <strong>URL:</strong> <span style='color: red;'>$url</span> <strong>Status:</strong> <span style='color: lime;'>Locked</span>
  </div>";
  
  // Generate the form for file upload
  echo "<div class='text-center'>
  <form method='post' target='_blank' action='$url' enctype='multipart/form-data'>
  <label class='custom-file'>
  <input type='file' name='$pf' class='form-control-file'>
  </label>
  <button type='submit' name='d' class='btn btn-outline-danger mt-2'>Go!</button>
  </form>
  </div>";
  }
  ?>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>