<?php
// waterline.php

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
img_tag('Waterline-1---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Waterline-2---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Waterline-3---2010.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Waterline-4---2010.jpg');
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
  <h2>WATERLINE</h2>
  <h3>2010</h3>

<p>A sculptural form depicting the dramatic lines of the element of water. 
Private commission - Cannes - France - 2010
</p>

</div>

<?php footer(); ?>
