<?php
// commissions.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
$thumbs = array(
);
for ($i = 0; $i < 5; $i++) {
  echo '<div class="thumb">';
    img_tag($thumbs[$i]);
  echo '</div>';
}
?>



<?php footer(); ?>
