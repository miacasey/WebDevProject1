<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="gear";

// function that outputs a picture of the type of wetsuit given the season the user inputs
function seasonGear($season) {
  $source1= "http://www.surfscience.com/topics/gear-and-equipment/surf-wear/what-to-wear-while-surfing/";
  if ($season == "Summer") {
    echo "<h2> Springsuit </h2> <img src='images/springsuit.jpg' width=20% alt='springsuit'/>
    <br> <span class='citation'> (source: <a href=" . $source1 . ">" . $source1 . "</a>)</span>";
  } else if ($season== "Winter") {
    echo "<h2> Hooded Full Suit </h2> <img src='images/fullsuit.jpg' width=20% alt='fullsuit'/>
    <br> <span class='citation'> (source: <a href=" . $source1 . ">" . $source1 . "</a>)</span>";
  }
}
//function that outputs a picture of the type of surfboard given the level of expertise the user inputs
function levelGear($level){
  $source2= "http://www.newquaysurfer.org/2011/03/05/a-beginners-guide-to-buying-a-surfboard/";
  if ($level== "Beginner") {
    echo "<h2> Foam Board </h2> <img src='images/foamboard.jpg' width=20% alt='foamboard'/>
    <br> <span class='citation'> (source: <a href=" . $source2 . ">" . $source2 . "</a>)</span>";
  } else if ($level== "Intermediate") {
    echo "<h2> Mini-Mal Board </h2> <img src='images/minimal.jpg' width=20% alt='minimal'/>
    <br> <span class='citation'> (source: <a href=" . $source2 . ">" . $source2 . "</a>)</span>";
  } else {
    echo "<h2> Short Board </h2> <img src='images/shortboard.jpg' width=20% alt='shortboard'/>
    <br> <span class='citation'> (source: <a href=" . $source2 . ">" . $source2 . "</a>)</span>";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Gear - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?> <br> <br>
<button class="button button1" onclick="window.location.href='gear.php'"> Back to Form </button>
  <div id="content">
      <h3> Gear to Buy: </h3>
        <?php
        //if the form is submitted we run our two functions to print pictures/descriptions
        if (isset($_REQUEST["submit"])) {
          seasonGear($_REQUEST["season"]);
          levelGear($_REQUEST["level"]);
        }
        ?>
  </div>
</body>

</html>
