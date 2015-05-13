<?php
// the_lost_cosmos.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
<?php img_tag('The-Lost-Cosmos--LARGE-close-up3.jpg'); ?>
    </div>
    <div class="item">
<?php img_tag('The-Lost-Cosmos-Nathalie-Vin-1c.jpg'); ?>
    </div>
    <div class="item">
<?php img_tag('The-Lost-Cosmos-Nathalie-Vin-1d.jpg'); ?>
    </div>
    <div class="item">
<?php img_tag('The-Lost-Cosmos-Nathalie-Vin-1e.jpg'); ?>
    </div>
    <div class="item">
<?php img_tag('The-Lost-Cosmos-Nathalie-Vin-1f.jpg'); ?>
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
  <h2>THE LOST COSMOS</h2>
  <h3>2015</h3>
<p>
"The lost Cosmos" is part of a series of six panels made of a Jesmonite cast from a computer component tray, ceramic tiles and 3D lenticular squares.
<br><br>
2015
<br><br>
Each panel is 42 cm x 42 cm x 5 cm.
<br><br>
photo credit: Simon Martner
</div>

<?php footer(); ?>

