<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="gear";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title> Gear - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div id="content" class= "main">
    <h3> find the gear for you! </h3>
    <form method="post" action="submit.php">
      <fieldset>
      Time of Season? <br>
      <input type="radio" name="season" value="Summer" required> Summmer
      <input type="radio" name="season" value="Winter" required> Winter <br> <br>
       Level of Surfer? <br>
      <input type="radio" name="level" value="Beginner" required> Beginner
      <input type="radio" name="level" value="intermediate" required> Intermediate
      <input type="radio" name="level" value="advanced" required> Advanced
      <br><br>
      <input type="submit" name="submit" value="Submit!"/>
    </fieldset>
    </form>
  </div>

</body>
</html>
