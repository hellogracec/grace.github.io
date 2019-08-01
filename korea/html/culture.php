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
  <title>Colorful Culture</title>
  <link rel="stylesheet" href="../styles/styles.css" />
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
    require_once '../includes/header.php'
    ?>
    <!-- Main: Banner -->
    <main>
      <div class="banner">
        <img class="banner-img" src="../images/banner-culturejagalchi-market-fish.jpg" alt="Hanok Village B&W" />
        <h2 class="hero-text">Colorful Korea</h2>
      </div>
      <!-- Main: Article -->
      <section>
        <!-- Article: hangeul -->
        <article>
          <h1>Hangeul, the most efficient language</h1>
          <div class="grid-container-hangeul">
            <img class="hangeul-img" src="../images/culture-Hanminjeongeum.jpg" alt="Korean Origin Hunminjeoneum" />
            <div class="hangeul-text">
              <p>
                Hangeul, one of the most unique creations of the nation, was
                introduced in 1443 by King Sejong (r. 1418-1450), the 4th king
                of the Joseon Dynasty. In order to help all commoners to
                easily read and write this new alphabet, Hunminjeongeum
                (meaning "Proper sounds to instruct the people" in Korean) was
                created. The name of the language was changed to the current
                Hangeul in the 20th century.
              </p>
              <p>
                Hangeul is a series of scientifically designed characters. The
                alphabet is composed of basic consonants and vowels, each with
                a set sound, and a dot or a line added to form more sounds.
                The 5 main consonants (ㄱ, ㄴ, ㅅ, ㅁ, ㅇ) imitate the shape
                the lips and tongue make when producing that particular sound,
                while the 3 main vowel components (ㆍ, ㅡ, ㅣ) symbolize the
                sky, the earth and mankind respectively. Originally composed
                of 17 consonants and 11 vowels, only 14 consonants and 10
                vowels are used in modern Hangeul.
              </p>
            </div>
          </div>
        </article>
        <!-- Article: K-Food -->
        <article>
          <h1>K-Food, a culinary heaven</h1>
          <figure>
            <img class="culture-table" src="../images/culture-food-table.jpeg" alt="Korean Traditional Food Table" />
          </figure>
          <p>
            한식[Hansik] refers to Korean food, usually centered on rice,
            served alongside a bowl of soup and a variety of side dishes. Most
            foods use meat and vegetables as the main ingredients, and are
            boiled or steamed in brine or water rather than fried in oil,
            making hansik very healthy. More than anything else, hansik's most
            outstanding feature is the amount of fermented foods. The most
            well-known are kimchi (fermented cabbage), ganjang (soy sauce),
            doenjang (soybean paste), and gochujang (Korean chili paste).
          </p>
          <div class="culture-gallery">
            <figure class="col">
              <img src="../images/culture-food-lady.jpg" alt="" />
            </figure>
            <figure class="col">
              <img src="../images/culture-food-fish-soup.jpg" alt="" />
            </figure>
            <figure class="col">
              <img src="../images/culture-food-eel.jpg" alt="" />
            </figure>
            <figure class="col">
              <img src="../images/culture-food-lamb.jpg" alt="" />
            </figure>
          </div>
        </article>
        <!-- Article: K-Pop -->
        <article class="body-text">
          <h1>K-Pop, a global phenomenon</h1>
          <div class="grid-container-kpop">
            <figure class="kpop-video">
              <iframe src="https://www.youtube.com/embed/MkrH1F1D-r8" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
            <p class="kpop-text">
              Korean pop is a part of Korean Wave which marks a global
              phenomenon originating in South Korea at the beginning of 21st
              century that had a strong impact throughout the world and
              influenced contemporary culture, music, film and television
              industry. Even though South Korean culture and traditions go a
              long way back, there is a big American influence and millennials
              seem to outrule the old traditions with a new age music and
              lifestyle. K-pop has a quite recognizable sound and it contains
              a wide spectrum of musical and visual elements, which makes it
              hard not to notice.
            </p>
          </div>
        </article>
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