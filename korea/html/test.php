<?php
$siteRoot = '/korea';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- fav icon: Head Title -->
  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png" />
  <link rel="manifest" href="../images/favicon/site.webmanifest" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <!-- Basic Set -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test</title>
  <link rel="stylesheet" href="../styles/styles.css" />
  <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143329719-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-143329719-1");
  </script>
</head>

<body>
  <div class="wrapper">
    <!-- Header & Nav bar -->
    <?php
    require_once '../includes/header.php'
    ?>
    <!-- Main: Banner -->
    <main>
      <div class="banner">
        <img class="banner-img" src="../images/banner-travel-jangdokdae-earthenwares.jpg" alt="Hanok Village B&W" />
        <h2 class="hero-text">Uh oh...</h2>
      </div>
      <!-- Main: Article -->
      <section>
        <h1>SEO robots.txt</h1>
        <h1>Disalow this page.</h1>
      </section>
    </main>
    <!-- Footer -->
    <?php
    require_once '../includes/footer.php'
    ?>
  </div>
  <script src="../scripts/menu.js"></script>
</body>

</html>