<?php
// or_du_temps.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('Or-du-temps-4b.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Or-du-temps-4c.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>or du temps</h2>
  <h3>2015</h3>
<p>
<br><br>
2015
<br><br>
Dimensions: 23 cm x 23 cm x 5 cm
<br><br>
Made with traditional gold and coloured gold leaf venitian tiles. "Or du temps" is part of a series of 12 pieces.
<br><br>
photo credit: Simon Martner</p>
</div>

<?php footer(); ?>
