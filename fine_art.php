<?php
// fine_art.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$thumbs = array(
  // page to link to, image thumbnail, hover text
  array('billowing_clouds.php','billowing_clouds.jpg','billowing clouds <br /> 2011'),
  array('free_as_the_air.php','free_as_the_air.jpg','free as the air <br /> 2012'),
  array('in_between_the_lines.php','in_between_the_lines.jpg','in between the lines <br /> 2010'),
  array('littil_heimar.php','littil_heimar.jpg','littil heimar <br /> 2014'),
  array('multiverse.php','multiverse.jpg','multiverse <br /> 2014'),
  array('space_odyssey.php','space_odyssey.jpg','space odyssey <br /> 2012'),
  array('terra_incognita.php','terra_incognita.jpg','terra incognita <br /> 2014'),
  array('upsurge.php','upsurge.jpg','upsurge <br /> 2011'),
  array('white_garden.php','white_garden.jpg','white garden <br /> 2013')
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
