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
    <title>About Korea</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143329719-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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
    <img class="banner-img" src="../images/banner-about-kiwa-wall-plants.jpg" alt="Kiwa wall with plants">
    <h2 class="hero-text">From A to Z 대한민국</h2>
</div>
<!-- Main: Article -->
<section>
    <!-- Section1: MAP -->
    <article>
        <h1>Where is Korea?</h1>
        <div class="grid-container-map">
        <iframe class="map-korea" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632702.100469749!2d123.38180307700361!3d35.735462886427214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2sSouth+Korea!5e0!3m2!1sen!2sca!4v1558394072443!5m2!1sen!2sca" style="border:0" allowfullscreen></iframe>
        <p class="map-text">
            South Korea, an East Asian nation on the southern half of the Korean Peninsula, shares one of the world’s most heavily militarized borders with North Korea. It’s equally known for its green, hilly countryside dotted with cherry trees and centuries-old Buddhist temples, plus its coastal fishing villages, sub-tropical islands and high-tech cities such as Seoul, the capital.
            <br>The Korean peninsula, roughly 1,030 km long and 175 km wide at its narrowest point, is located in Northeast Asia. With Seoul as its capital city, Korea's total land area is 100,033 ㎢. Korea's neighbors include Japan to the east, China to the west, and Democratic People's Republic of Korea (North Korea) across the northern border.</p>
        </div>
    </article>
    <!-- Section2: Symbols -->
    <article>
        <h1>National Symbol of Korea</h1>
            <div class="grid-container-symbol">
            <figure class="symbol1"><img src="../images/about-flag.jpg" alt="Korean National Flag"></figure>
            <div class="symbol-text1">
            <h2>National Flag</h2>
            <p>태극기[Taegeukgi]: The current design of Taegeukgi was finalized on October 15, 1949. It symbolizes the principles of the yin and yang in oriental philosophy. The circle in the center is divided into two equal parts, where the upper red responds to the positive cosmic forces of the yang; conversely, the lower blue section represents the negative cosmic forces of the yin. The flag's background is white, representing peace and purity valued by the people of Korea. The circle is surrounded by four trigrams, one in each corner, characterizing continual movement, balance and harmony.</p>   
            </div>
            <figure class="symbol2"><img src="../images/about-mugunghwa.jpg" alt="Korean National Flower"></figure>
            <div class="symbol-text2">
            <h2>National Flower</h2> 
            <p>무궁화[Mugunghwa]: The national flower of Korea is mugunghwa, or rose of Sharon, which comes into bloom from July to October every year. A profusion of mugunghwa blossoms gracefully decorate the entire nation during blooming season, providing a view that has been loved by Koreans for many years. The flower’s symbolic significance stems from the Korean word mugung, which means immortal.</p>
            </div>
            <figure class="symbol3">  
                <img src="../images/about-anthem.jpg" alt="National Anthem">     
                <!-- National Anthem player from Wikipedia -->
                <!-- https://en.wikipedia.org/wiki/Aegukga# -->
                <div class="mediaContainer">
                <audio
                    id="mwe_player_0"
                    controls=""
                    preload="none"
                    class="kskin"
                    data-durationhint="57.149841269841"
                    data-startoffset="0"
                    data-mwtitle="National_anthem_of_South_Korea,_performed_by_the_United_States_Navy_Band.wav"
                    data-mwprovider="wikimediacommons"
                >
                    <source
                    src="//upload.wikimedia.org/wikipedia/commons/transcoded/0/0d/National_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav/National_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav.ogg"
                    data-title="Ogg Vorbis"
                    data-shorttitle="Ogg Vorbis"
                    data-transcodekey="ogg"
                    data-width="0"
                    data-height="0"
                    data-bandwidth="100296"
                    />
                    <source
                    src="//upload.wikimedia.org/wikipedia/commons/transcoded/0/0d/National_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav/National_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav.mp3"
                    data-title="MP3"
                    data-shorttitle="MP3"
                    data-transcodekey="mp3"
                    data-width="0"
                    data-height="0"
                    data-bandwidth="198872"
                    />
                    <source
                    src="//upload.wikimedia.org/wikipedia/commons/0/0d/National_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav"
                    data-title="Original WAV file (2.82 Mbps)"
                    data-shorttitle="WAV source"
                    data-width="0"
                    data-height="0"
                    data-bandwidth="2822400"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=bs&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="bs"
                    label="bosanski (bs) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=en&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="en"
                    label="English (en) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=es&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="es"
                    label="español (es) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=hr&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="hr"
                    label="hrvatski (hr) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=ja&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="ja"
                    label="日本語 (ja) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=ko&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="ko"
                    label="한국어 (ko) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=mk&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="mk"
                    label="македонски (mk) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=ru&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="ru"
                    label="русский (ru) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=sh&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="sh"
                    label="srpskohrvatski / српскохрватски (sh) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=sl&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="sl"
                    label="slovenščina (sl) subtitles"
                    data-dir="ltr"
                    />
                    <track
                    src="https://commons.wikimedia.org/w/api.php?action=timedtext&amp;title=File%3ANational_anthem_of_South_Korea%2C_performed_by_the_United_States_Navy_Band.wav&amp;lang=sr&amp;trackformat=srt&amp;origin=%2A"
                    kind="subtitles"
                    srclang="sr"
                    label="српски / srpski (sr) subtitles"
                    data-dir="ltr"
                    />
                </audio>
                <p>Audio Sampe is from Wikipedia</p>
                </div>
            </figure> 
            <div class="symbol-text3">
            <h2>National Anthem</h2>
            <p>애국가[Aegukga]: Aegukga literally means “a song expressing love towards their country” in Korean, and it was originally meant to foster patriotism and raise awareness for the nation’s independence. The anthem had undergone several changes since it was first introduced until it took its current form. Maestro Ahn Eak-tai (1906-1965) rearranged the piece in 1935, which was then officially adopted by the Korean Government as the national anthem. Since then, the anthem began to be used at all schools and official functions.</p>
            </div>
            </div>
    </article>
    <!-- Section3: Population -->
    <article>
        <h1>Population</h1>
        <p>The total population of Korea is approximately 51,635,256  (as of September 2018), with most of the population residing in the Seoul metropolitan area. Outside of Seoul, other large and economically advanced cities such as Busan, Incheon, Daegu, Daejeon, Gwangju and Ulsan also have higher population densities than other cities in Korea.</p>
        <div class="grid-container-pop">
        <img class="pop-img" src="../images/about-map-population.png" alt="South Korea map in provinces">
    <!-- Table of Population -->
    <!-- LATER: Apply JavaScript to align only Numbers right 
    For now, I will apply style to each one  align="right" -->
        <table class="pop-table">
            <tr>
                <th>Name</th>
                <th>Hangeul</th>
                <th>Population</th>
            </tr>
            <tr>
                <td>Seoul</td>
                <td>서울특별시</td>
                <td>9,830,452</td>
            </tr>
            <tr>
                <td>Busan</td>
                <td>부산광역시</td>
                <td>3,460,707</td>
            </tr>
            <tr>
                <td>Daegu</td>
                <td>대구광역시</td>
                <td>2,471,136</td>
            </tr>
            <tr>
                <td>Incheon</td>
                <td>인천광역시</td>
                <td>2,952,476</td>
            </tr>
            <tr>
                <td>Gwangju</td>
                <td>광주광역시</td>
                <td>1,460,972</td>
            </tr>
            <tr>
                <td>Deajeon</td>
                <td>대전광역시</td>
                <td>1,496,123</td>
            </tr>
            <tr>
                <td>Ulsan</td>
                <td>울산광역시</td>
                <td>1,161,303</td>
            </tr>
            <tr>
                <td>Sejong</td>
                <td>세종특별자치시</td>
                <td>295,041</td>
            </tr>
            <tr>
                <td>Gyeonggi</td>
                <td>경기도</td>
                <td>12,941,604</td>
            </tr>
            <tr>
                <td>Gangwon</td>
                <td>강원도</td>
                <td>1,545,452</td>
            </tr>
            <tr>
                <td>North Chungcheong</td>
                <td>충청북도</td>
                <td>1,595,164</td>
            </tr>
            <tr>
                <td>South Chungcheong</td>
                <td>충청남도</td>
                <td>2,120,666</td>
            </tr>
            <tr>
                <td>North Jeolla</td>
                <td>전라북도</td>
                <td>1,847,089</td>
            </tr>
            <tr>
                <td>South Jeolla</td>
                <td>전라남도</td>
                <td>1,890,412</td>
            </tr>
            <tr>
                <td>North Gyeongsang</td>
                <td>경상북도</td>
                <td>2,682,897</td>
            </tr>
            <tr>
                <td>South Gyeongsang</td>
                <td>경상남도</td>
                <td>3,377,126</td>
            </tr>
            <tr>
                <td>Jeju</td>
                <td>제주특별자치도</td>
                <td>661,511</td>
            </tr>
        </table>
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