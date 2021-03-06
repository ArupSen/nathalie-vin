<?php
// free_as_the_air.php

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
img_tag('Free-as-the-air-1---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-2---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-3---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-4---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-5---2012.jpg');
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
  <h2>free as the air</h2>
  <h3>2012</h3>

<p>“Free as the air” is made of 60,000 hand cut circles made of glass and silver tiles and dichroic fused glass.
1m x 52.5cm
<br><br>
Has been exhibited at the International Encounters of Mosaic" as part of an international juried exhibition in France - 2012
<br><br>
photo credit: Simon Martner
</p>

</div>

<?php footer(); ?>
