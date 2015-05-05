<?php
// the_earth_is_scratching_herself.php

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
img_tag('The-Earth-is-scratching-Herself-1--2010-.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Earth-is-scratching-Herself-2--2010-.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Earth-is-scratching-Herself-3--2010-.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Earth-is-scratching-Herself-4--2010-.jpg');
?>
</div>
    <div class="item">
  <?php
  img_tag('The-Earth-is-scratching-Herself-5--2010-.jpg');
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
  <h2>THE EARTH IS SCRATCHING HERSELF</h2>
  <h3>2010</h3>

<p>Privately owned - Cannes, France- 2010
<br><br>
Dyptich: 1 m diameter each
<br><br>
photo credit: Eric Zaragoza
</p>
</div>

<?php footer(); ?>
