<?php
// set_in_flames.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('Set-in-flames-1.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Set-in-flames-2.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>set in flames</h2>
  <h3>2014</h3>
<p>
<br><br>
2014
<br><br>
Dimensions: 12,5 cm x 12,5 cm x 4 cm
<br><br>
"Set in Flames" is made with glass and coloured mirror tiles, a ceramic large peeble and a Notre Dame gargoyle model.
Set in flames is part of a series of micro world exploring the notion of time, the good and the bad, death etc..
<br><br>
photo credit: Simon Martner</p>
</div>

<?php footer(); ?>
