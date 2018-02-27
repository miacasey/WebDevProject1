<?php
include("includes/init.php");

// current location
$current_page_id="index";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title> Home - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div id='content' class="main">
    <h3> welcome to mia's surf website!</h3>
    I have been surfing since I was 9 years old when my dad first took me out
    surfing near our beach house in New Zealand. For the past 6 years, I have
    been living in California exploring beaches all down the coast. <br> <br>
    On my webpage, you can explore the travel page, with some of my favorite
    surf spots in the world, the history page, summarizing the origins of
    the sport, and the gear page, where you can find the gear fit for you! I hope you enjoy!

    <br> <br> <br>

    <img src="images/mia.png" width=45% alt="Mia"> <img src="images/mia2.png" width=20% alt="Mia2">
    <figcaption>
          <span class="citation">(source: <a> my photo library </a>)</span>
    </figcaption>
  </div>
<?php include("includes/footer.php");?>
</body>
</html>
