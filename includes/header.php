<header id="backgroundimage">
  <h1><?php echo $title; ?> </h1>

    <ul>
      <?php
      foreach($pages as $page_id => $page_name) {
        if($page_id == $current_page_id) {
          $css_id = "class='active' id='current_page'";
        } else {
          $css_id = "";
        }
        echo "<li><a" . $css_id . " href='" . $page_id . ".php'>$page_name</a></li>";
      }
      ?>
    </ul>
</header>
