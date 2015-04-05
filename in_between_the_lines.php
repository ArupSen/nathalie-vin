<?php
// in_between_the_lines.php

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
img_tag('In-between-the-lines-1---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('In-between-the-lines-2---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('In-between-the-lines-3---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('In-between-the-lines-4---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('In-between-the-lines-5---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('In-between-the-lines-6---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('In-between-the-lines-7---2010.jpg');
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
  <h2>IN BETWEEN THE LINES</h2>
  <h3>2010</h3>

<p>What happens after we die? No-one knows of course, but with “In Between the Lines” I am revealing what the last images might be before we leave this hectic world behind – or the whole of your life flashes before your eyes. A kaleidoscope of life’s precious aspects are represented here: children, friends, love, belief, art, memory, and like a film we zoom out from the chaos of all this, catapulted by the celestial spiral into the unknown, the hypnotic and the unearthly.</p>
</div>

<?php footer(); ?>
