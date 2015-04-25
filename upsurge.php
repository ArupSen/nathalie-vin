<?php
// upsurge.php

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
img_tag('Upsurge-1---2011.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Upsurge-2---2011.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Upsurge-3---2011.jpg');
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
  <h2>UPSURGE</h2>
  <h3>2011</h3>
<p>Upsurge is made coloured mirror, ceramic tiles, metal washers and dichroic fused glass.
<br><br>
2011
<br><br>
40 cm x 40 cm x 2 cm
<br><br>
Has been exhibited at the Glass Museum in Tacoma as part of an international juried exhibition in the US - 2013</p>
</div>

<?php footer(); ?>
