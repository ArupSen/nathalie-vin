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
    <div class="item active">
<?php
img_tag('White-garden-2---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('White-garden-3---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('White-garden-4---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('White-garden-5---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('White-garden-6---2013.jpg');
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
  <h2>WHITE GARDEN</h2>
  <h3>2013</h3>
</div>

<?php footer(); ?>
