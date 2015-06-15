<?php
// littil_heimar.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('Littil-Heimar-1--2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Littil-Heimar-2--2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Littil-Heimar-3--2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Littil-Heimar-4--2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Littil-Heimar-5--2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Littil-Heimar-6--2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Littil-Heimar-7--2014.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>LITTIL HEIMAR</h2>
  <h3>2014</h3>

<p>Littil Heimar is made with Ceramic and glass tiles, coloured mirrors, stained glass, crystals, kyanite stones, pyrite stones, lead bullets, wood, beads, Mexican tiles, peebles.
<br><br>
2014
<br><br>
40 cm x 17 cm x 4 cm.
<br><br>
Has been exhibited at "The City" exhibition in London" as part of an international juried exhibition in the UK – 2014
<br><br>
photo credit: Lou Smith
<p>
</div>

<?php footer(); ?>
