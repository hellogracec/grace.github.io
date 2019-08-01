<?php
$siteRoot = '/korea';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- fav icon: Head Title -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Basic Set -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel to Korea</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143329719-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143329719-1');
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
                <img class="banner-img" src="../images/banner-travel-jangdokdae-earthenwares.jpg" alt="Hanok Village B&W">
                <h2 class="hero-text">Every Corner 구석구석</h2>
            </div>
            <!-- Main: Article -->
            <section>
                <div class="flex-container">
                    <div class="transp">
                        <h1>Transportation</h1>
                        <div class="grid-container-transp">
                            <figure class="box-parent">
                                <a href="https://www.airport.kr/ap/en/index.do" target="_blank" title="Incheon Airport website"><img src="../images/travel-airport.jpg" alt="Link to Incheon Airport website">
                                    <div class="box-child">
                                        <h2>Flights</h2>
                                    </div>
                                </a>
                            </figure>
                            <figure class="box-parent">
                                <a href="http://www.intltaxi.co.kr/" target="_blank" title="Seoul Taxi website"><img class="" src="../images/travel-taxi.jpg" alt="Link to Seoul Taxi website">
                                    <div class="box-child">
                                        <h2>Taxis</h2>
                                    </div>
                                </a>
                            </figure>
                            <figure class="box-parent">
                                <a href="http://www.seoulmetro.co.kr/en/cyberStation.do?menuIdx=337" target="_blank" title="Seoul Subway website"><img class="" src="../images/travel-subway.jpg" alt="Link to Seoul Subway website">
                                    <div class="box-child">
                                        <h2>Subways</h2>
                                    </div>
                                </a>
                            </figure>
                            <figure class="box-parent">
                                <a href="https://www.bustago.or.kr/newweb/en/index.do" target="_blank" title="Seoul Bus website"><img class="" src="../images/travel-bus.jpg" alt="Link to Seoul Bus website">
                                    <div class="box-child">
                                        <h2>Buses</h2>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="hotels">
                        <h1>Accommodation</h1>
                        <div class="link-box">
                            <ul>
                                <li><a href="https://www.tripadvisor.ca/" target="_blank" class="tripadvisor" title="Trip advisor">Trip Advisor</a></li>
                                <li><a href="https://www.hotelscombined.ca/" target="_blank" class="hotelscombined" title="Hotels Combined">Hotels Combined</a></li>
                                <li><a href="https://www.agoda.com/" target="_blank" class="agoda" title="Agoda">Agoda</a></li>
                                <li><a href="https://ca.hotels.com/" target="_blank" class="hotelscom" title="Hotels com">Hotels.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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