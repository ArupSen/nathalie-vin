<?php
// bermondsey_eco_garden.php

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
img_tag('Bermondsey-Eco-garden-1--2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Bermondsey-Eco-garden-2--2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Bermondsey-Eco-garden-3--2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Bermondsey-Eco-garden-5--2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Bermondsey-Eco-garden-5--2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Bermondsey-Eco-garden-6--2010.jpg');
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
  <h2>BERMONDSEY ECO GARDEN</h2>
  <h3>2010</h3>

<p>Commissioned by Southwark Council, I created mosaics for four granite columns acting as gateposts on the path through the park.</p>
</div>

<?php footer(); ?>
