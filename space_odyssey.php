<?php
// space_odyssey.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
<?php
img_tag('Space-Odyssey-2--2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Space-Odyssey-3--2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Space-Odyssey-4--2012.jpg');
?>
</div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-nathalie" role="button" data-slide="prev">
    <span class="fa fa-caret-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-nathalie" role="button" data-slide="next">
    <span class="fa fa-caret-right fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container description">
  <h2>SPACE ODYSSEY</h2>
  <h3>2012</h3>
<p>Space Odyssey is made of coloured mirror, Glow-in-the-dark tiles, dichroic fused glass and a hologramme.
<br><br>
2012
<br><br>
20 cm x 20 cm x 4 cm
<br><br>
photo credit: Lou Smith (framed images) and Gillian Cargyll (last one, glow in the dark)
</p>
</div>

<?php footer(); ?>
