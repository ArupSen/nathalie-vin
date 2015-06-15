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
    <div class="item active"> <?php img_tag('Bermondsey-Eco-garden-1--2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Bermondsey-Eco-garden-2--2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Bermondsey-Eco-garden-3--2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Bermondsey-Eco-garden-4--2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Bermondsey-Eco-garden-5--2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Bermondsey-Eco-garden-6--2010.jpg'); ?> </div>
  </div>
<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>BERMONDSEY ECO GARDEN</h2>
  <h3>2010</h3>

<p>Commissioned by Southwark Council. Creation of four granite columns acting as gateposts on the path through the park.
<br><br>
photo credit: Nathalie Vin
</p>
</div>

<?php footer(); ?>
