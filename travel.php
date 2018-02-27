<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="travel";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Travel - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?> <br>
  <h2> click on the markers to learn more</h2>
    <div class="main" id="content">
    <img src="images/map.png" width=100% alt="World" usemap="#worldmap">
    <!-- Image source: http://webiconspng.com/icon/78864 -->
    <figcaption>
          <span class="citation">(map source: <a href="http://webiconspng.com/icon/78864">
            http://webiconspng.com/icon/78864</a>)</span>
          <br>
          <span class="citation">(marker source: <a href="https://www.iconfinder.com/search?q=Map">
            https://www.iconfinder.com/search?q=Map </a>)</span>
    </figcaption>
    <map name="worldmap">
       <a href="#bonsai"> <img id="marker1" src="images/marker.png"></a>
       <a href="#goldcoast"> <img id="marker2" src="images/marker.png"></a>
       <a href="#zuma"> <img id="marker3" src="images/marker.png"></a>
       <a href="#capetown"> <img id="marker4" src="images/marker.png"></a>
    </map>
  </div>

  <div class="boxed" id="bonsai">
      <h2> Bonsai Pipeline, Hawaii </h2>
      Bonsai has some of the best waves around the world.
      It is also hold to some of the biggest surfing contests, including
      the Billabong Pipeline Masters in December.
      Beware, because the Pipeline has some of the strongest, deadliest
      waves around so you must be pretty experienced before taking
      on Oahu's north shore. <br> <br>
      <img src="images/bonsai.jpg" width=100% alt="Pipeline">
      <figcaption>
            <span class="citation">(picture source: <a href="https://www.hawaiimagazine.com/content/your-guide-oahus-winter-surf-contests-north-shore">
              https://www.hawaiimagazine.com/content/your-guide-oahus-winter-surf-contests-north-shore</a>) <br> (information source: myself)</span>
      </figcaption>
  </div>

  <div class="boxed" id="goldcoast">
      <h2> Gold Coast, Australia </h2>
      The Gold Coast is home to some of the best waves in the pacific.
      Professional lifeguards and surf lifesavers watch most of the beaches
      so it is one of the safest spots, too.
      My personal favorite beach is Snapper Rocks, which hosts the Quicksilver Pro
      surf competition every year.
      <img src="images/goldcoast.jpg" width=100% alt="Gold Coast">
      <figcaption>
            <span class="citation">(picture source: <a href="https://www.seabreeze.com.au/News/Surfing/Surfing-ruled-out-of-the-Gold-Coast-Commonwealth-Games_8867414.aspx">
              https://www.seabreeze.com.au/News/Surfing/Surfing-ruled-out-of-the-Gold-Coast-Commonwealth-Games_8867414.aspx</a>) <br>
              (information source: <a href="https://www.australia.com/en-gb/places/qld/qld-surfing.html"> https://www.australia.com/en-gb/places/qld/qld-surfing.html </a>)</span>
      </figcaption>
  </div>

  <div class="boxed" id="zuma">
       <h2> Zuma Beach, California </h2>
       This beach is located at the northern end of Malibu, right of of the Pacific Coast Highway.
       It is home to some world class breaks. On a nice day, you can definitely
       expect big crowds, but it still stands as a must-surf spot.
       <img src="images/zuma.jpg" width=100% alt="Zuma">
       <figcaption>
             <span class="citation">(picture source: <a href="https://www.surfertoday.com/surfing/6150-the-best-beaches-for-surfing-in-los-angeles">
               https://www.surfertoday.com/surfing/6150-the-best-beaches-for-surfing-in-los-angeles</a>) <br> (information source: myself)</span>
       </figcaption>
  </div>

  <div class="boxed" id="capetown">
       <h2> Cape Town, South Africa </h2>
      Cape Town's beaches are home to both amuteurs and some of the world's best surfers.
      You can find solid, consistent six-to-eight foot waves and amazing offshore swells.
      Cape Town's oceans are also home to great-white sharks, so be careful!
       <img src="images/capetown.jpg" width=100% alt="Capetown">
       <figcaption>
             <span class="citation">(picture source: <a href="http://cabrinha.co.za/product/surfboard-rental-cape-town/">
               http://cabrinha.co.za/product/surfboard-rental-cape-town/</a>) <br>
             (information source: <a href="http://www.travelandleisure.com/local-experts/cape-town/where-surf-cape-town"> http://www.travelandleisure.com/local-experts/cape-town/where-surf-cape-town </a>)</span>
       </figcaption>
  </div>

</body>
</html>
