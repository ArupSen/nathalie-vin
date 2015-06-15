<?php
// billowing_clouds.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('Billowing-cloud-1---2011.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Billowing-cloud-2---2011.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Billowing-cloud-3---2011.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Billowing-cloud-4---2011.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Billowing-cloud-5---2011.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Billowing-cloud-6---2011.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Billowing-cloud-7---2011.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>BILLOWING CLOUDS</h2>
  <h3>2011</h3>

<p>"Billowing clouds is a series of five clouds made of hand cut ceramic, glass and silver tiles".
There are 4 different sizes which varies from 40cm x 17cm for the smallest to 79cm x 33cm for the largest.
<br><br>
Billowing clouds have been exhibited at the Lexington Gallery and Museum" as part of an international juried exhibition in the US - 2011
<br><br>
photo credit: Simon Martner
</p>

</div>

<?php footer(); ?>
