<?php
// commissions.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$thumbs = array(
  // page to link to, image thumbnail, hover text
  array('bermondsey_eco_garden.php','bermondsey_eco_garden.jpg','bermondsey eco garden <br> 2010'),
  array('the_earth_is_scratching_herself.php','the_earth_is_scratching_herself.jpg','the earth is scratching herself <br> 2010'),
  array('the_limehouse_fountain_project.php','the_limehouse_fountain_project.jpg','the limehouse fountain project <br> 2013'),
  array('waterline.php','waterline.jpg','waterline <br> 2010'),
  array('michael_northcroft.php','Michael-Northcroft-thumbnail.jpg','michael northcroft <br> 2014'),
);
echo '<div class="row">';
echo '<div class="container">';
$thumb_count = count($thumbs);
for ($i = 0; $i < $thumb_count; $i++) {
  echo '<a class="thumbnail pull-left col-sm-4 col-md-4 col-xs-12" href="'.$thumbs[$i][0].'">';
    img_tag($thumbs[$i][1]);
  echo '<span>'.$thumbs[$i][2].'</span>';
  echo '</a>';
}
echo '</div>';
echo '</div>';
?>



<?php footer(); ?>
