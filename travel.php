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
  <div class="main">
    <img src="images/map.png" width=100% alt="World" usemap="#worldmap">
    <!-- Image source: http://webiconspng.com/icon/78864 -->
    <figcaption>
          <span class="citation">(source: <a href="http://webiconspng.com/icon/78864">
            http://webiconspng.com/icon/78864</a>)</span>
          <br>
          <span class="citation">(marker source: <a href="https://www.iconfinder.com/search?q=Map">
            https://www.iconfinder.com/search?q=Map </a>)</span>
    </figcaption>
    <map name="worldmap">
       <a href="#bonsai"> <img id="marker1" src="images/marker.png"></a>
       <a href="#goldcoast"> <img id="marker2" src="images/marker.png"></a>
       <a href="#zuma"> <img id="marker3" src="images/marker.png"></a>
    </map>
    <br> <br>
  </div>

  <div class="boxed">
      <h2 id="bonsai"> Bonsai Pipeline Hawaii </h2>
      Bonsai has some of the best waves around the world.
      It is also hold to some of the biggest surfing contests, including
      the Billabong Pipeline Masters that takes place every December.
      Beware, because the Pipeline has some of the strongest, deadliest
      waves around so make sure you are pretty experienced before taking
      on Oahu's north shore. <br> <br>
      <img src="images/bonsai.jpg" width=100% alt="Pipeline">
      <figcaption>
            <span class="citation">(source: <a href="https://www.hawaiimagazine.com/content/your-guide-oahus-winter-surf-contests-north-shore">
              https://www.hawaiimagazine.com/content/your-guide-oahus-winter-surf-contests-north-shore</a>)</span>
      </figcaption>
  </div>

  <div class="boxed" id="goldcoast">
       <h2> Gold Coast Australia </h2>
       Surfing is actually the national sport of Australia.
  </div>

     <div id="zuma">
       <h2> Zuma Beach California </h2>
       This Malibu beach right of of the Pacific Coast Highway
       has some world class breaks. On a nice day, you can definitely
       expect big crowds, but it still stands as a must-surf spot.

     </div>
</body>
</html>
