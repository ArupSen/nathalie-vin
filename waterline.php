<?php
// waterline.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('Waterline-1---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Waterline-2---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Waterline-3---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Waterline-4---2010.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>WATERLINE</h2>
  <h3>2010</h3>
<p>Privately owned - Cannes, France- 2010
<br><br>
1.90 m x 55 cm x 2 cm
<br><br>
photo credit: Eric Zaragoza (first one) and the others: Nathalie Vin
</p>
</div>

<?php footer(); ?>
