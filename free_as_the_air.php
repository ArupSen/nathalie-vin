<?php
// free_as_the_air.php

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
img_tag('Free-as-the-air-1---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-1---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-2---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-3---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-4---2012.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Free-as-the-air-5---2012.jpg');
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
  <h2>free as the air</h2>
  <h3>2012</h3>

<p>“While making the Koi mosaic, strangely I began to see it as much more a creature of the air than of water and ‘FREE AS THE AIR’ kept coming into my head as the title for it. When I researched the mythology of the Koi, so strongly embedded in Japanese culture, it said that according to legend, if a koi succeeds in swimming upstream and climbing the waterfalls at a point on the Yellow River called Dragon Gate, it will be transformed from a fish into a dragon – a creature of the air! I love this serendipity!</p>

</div>

<?php footer(); ?>
