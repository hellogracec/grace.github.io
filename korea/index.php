<?php
$siteRoot = '/korea';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- fav icon: Head Title -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png" />
  <link rel="manifest" href="images/favicon/site.webmanifest" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <!-- Basic Set -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to Korea</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <!-- SNS Buttons icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    require_once './includes/header.php';
    ?>
    <!-- Main: Banner -->
    <main>
      <div class="banner">
        <img class="banner-img" src="images/banner-hanok-village-edited.jpg" alt="Hanok Village B&W" />
        <h2 class="hero-text">Welcome Home</h2>
      </div>
      <!-- Main: Article -->
      <section>
        <article>
          <h1>대한민국 [Daehan Minguk]: The Republic of Korea</h1>
          <p>
            South Koreans use Hanguk (한국, 韓國) to refer to just South Korea
            or Korea as a whole, Namhan (남한, 南韓; "South Han") for South
            Korea, and Bukhan (북한, 北韓; "North Han") for North Korea. South
            Koreans often refer to Korea as "uri nara" (우리 나라), meaning
            "our nation" or "our country". In addition, the official name for
            the Republic of Korea in the Korean language is "Daehan Minguk"
            (대한민국, 大韓民國; which is usually translated as "The Republic
            of Korea").
          </p>
          <p>
            The Republic of Korea (herein after Korea) is a country visited by
            approximately ten million international travelers every year. With
            its long history in culture and tradition, the country has a lot
            to offer to travelers. Continue reading to learn general
            information about Korea before visiting.
          </p>
        </article>
      </section>
      <!-- Three columns with banner images that direct to each web page -->
      <section class="grid-container-box">
        <a class="grid-box1" href="about.html">
          <figure class="gray box-parent">
            <img src="images/square-kiwa-wall-plants.jpg" alt="Link to About page" />
            <figcaption class="box-child">
              <h2>About</h2>
              <h3>Locatoin, Flags, etc.</h3>
            </figcaption>
          </figure>
        </a>
        <a class="grid-box2" href="culture.html">
          <figure class="gray box-parent">
            <img src="images/square-jagalchi-market-fish.jpg" alt="Link to Culture page" />
            <figcaption class="box-child">
              <h2>Culture</h2>
              <h3>Hanguel, Food and K-POP</h3>
            </figcaption>
          </figure>
        </a>
        <a class="grid-box3" href="travel.html">
          <figure class="gray box-parent">
            <img src="images/square-jangdokdae-earthenwares.jpg" alt="Link to Travel page" />
            <figcaption class="box-child">
              <h2>Travel</h2>
              <h3>Transportation& Accomodation</h3>
            </figcaption>
          </figure>
        </a>
      </section>
    </main>
    <!-- Footer -->
    <?php require_once './includes/footer.php' ?>
  </div>
  <script src="scripts/menu.js"></script>
</body>

</html>