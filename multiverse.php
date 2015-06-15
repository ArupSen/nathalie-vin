<?php
// multiverse.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('Multiverse-1---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Multiverse-2---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Multiverse-3---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Multiverse-4---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Multiverse-5---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Multiverse-6---2014.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>MULTIVERSE</h2>
  <h3>2014</h3>

<p>Multiverse is made of smaltis, Glow-in-the-dark and gold tiles, clockwork parts, lego's, polymer clay moulding and computer parts.
<br><br>
2014
<br><br>
1.10 m x 90 cm x 3 cm
<br><br>
Multiverse has been exhibited at the international juried "Picassiette" biennial in France and won a "special distinction" - 2014
<br><br>
photo credit: Simon Martner (first 3) and Lou Smith (last 3)
</p>
</div>
<?php footer(); ?>
