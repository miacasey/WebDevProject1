<?php
include("includes/init.php");

// declare the current location, utilized in header.php
$current_page_id="history";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>History - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div id='content' class= "main" class="row">
    <h3> history of surf </h3>
    <div id= "small" class="column">
      <h2> origin </h2>
        Over three thousand years ago in Polynesia, people began riding waves with wooden
        boards.
        However, our first historical records were in the late 1700s, when Captain Cook visited Hawai'i
        and described the method of laying on top of a plank until the greatest swell sets,
        then pushing forward so the plank rests on the swell and accelerates them forward.
        During the next century, Hawaii become a trading post in the Pacific crossroads and more
        people recounted the new sport of surfing.
        <img src='images/hist1.jpg' width=100% alt='hist1'/>
        <br>
        <span class='citation'> (source: <a href=http://www.surfingforlife.com/history.html> http://www.surfingforlife.com/history.html </a>)</span>
    </div>
    <div id= "small" class="column">
      <h2> 1900's </h2>
        Duke Kahanamoku, champion olympic swimmer, became a big name in the early 20th
        century. <br> <br>
        <img src='images/duke.jpg' width=100% alt='duke'/>
        <br>
        <span class='citation'> (source: <a href=https://www.surfertoday.com/surfing/11323-the-extraordinary-surfing-life-of-duke-kahanamoku> https://www.surfertoday.com/surfing/11323-the-extraordinary-surfing-life-of-duke-kahanamoku </a>)</span>
        <br> <br>
        He introduced the sport to Australia, and soon enough an American developed
        the first official surfboard. The surf community began to spread down the entire coast
        of California, and soon enough we added a fin to stabilize the board and wax to increase
        grip. Surfing became a world-wide phenomenon and gained momentum through the media.
    </div>
    <div id= "small" class="column">
      <h2> present day </h2>
        In the past 40 years, women also began to take over the surfing world and began
        competing professionally. Surfboards continued to evolve into the classic "short board"
        and the surf culture exploded from the Southern Californian beach lifestyle.
        Music, documentaries, films have contributed to the growth of the sport and development into an art form.
        <br> <br>
        <img src='images/modernsurf.jpg' width=100% alt='modernsurf'/>
        <br>
        <span class='citation'> (source: <a href=https://en.wikipedia.org/wiki/Surfing> https://en.wikipedia.org/wiki/Surfing </a>)</span>
    </div>
  </div>
</body>
</html>
