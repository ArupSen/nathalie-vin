<?php
// the_limehouse_fountain_project.php

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
img_tag('The-Limehouse-Fountain-project-1---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Limehouse-Fountain-project-2---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Limehouse-Fountain-project-4---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Limehouse-Fountain-project-5---2013.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('The-Limehouse-Fountain-project-6---2013.jpg');
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
  <h2>THE LIMEHOUSE FOUNTAIN PROJECT</h2>
  <h3>2013</h3>
<p>Located in the heart of the London Borough of Tower Hamlets, on the northern bank of the River Thames. 48 sqm mosaic project for a residential plaza
<br><br>
Privately owned – London - 2014</p>
<br><br>
photo credit: Lou Smith
</div>

<?php footer(); ?>
