<?php
// white_garden.php

require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-nathalie" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <?php img_tag('White-garden-2---2013.jpg'); ?> </div>
    <div class="item"> <?php img_tag('White-garden-3---2013.jpg'); ?> </div>
    <div class="item"> <?php img_tag('White-garden-4---2013.jpg'); ?> </div>
    <div class="item"> <?php img_tag('White-garden-5---2013.jpg'); ?> </div>
    <div class="item"> <?php img_tag('White-garden-6---2013.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>WHITE GARDEN</h2>
  <h3>2013</h3>
<p>White garden is made of white acrylic beads on canvas.
<br><br>
2013
<br><br>
White Garden was selected for the notorious "Works from the world" in Ravenna in Italy - 2013

<br><br>
White garden is the fruit of years of contemplation of light and its dominance over matter. With this piece I wanted to create a mosaic which, once exhibited would present an infinite and variable dance of light and shadows .

<br><br>
With this piece the lighting can be set up at different angles of the space and the work acquires its dynamism from a critical interaction with the viewer; the coloured shadows change depending upon the position of the viewer.

<br><br>
White garden is made of multi faceted acrylic objects pinned on a white canvas, reflected light and shadows.
<br><br>
photo credit: Simon Martner</p>
</div>

<?php footer(); ?>
