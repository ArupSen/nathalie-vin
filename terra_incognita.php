<?php
// terra_incognita.php

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
img_tag('Terra-Incognita-1---2014.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Terra-Incognita-2---2014.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Terra-Incognita-3---2014.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Terra-Incognita-4---2014.jpg');
?>
</div>
    <div class="item">
<?php
img_tag('Terra-Incognita-5---2014.jpg');
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
  <h2>TERRA INCOGNITA</h2>
  <h3>2014</h3>

<p>Life is 'terra incognita' and so is art - an ever-changing event emerging from endless possibilities.</p>

<p>With this piece I created an imaginary world where the laws of nature were different from those from Earth but somehow similar in evolution. 'Terra Incognita' is an attempt to symbolise the origin of an early writing by creating a fragment suggesting both contemporary and ancient representations. Hopefully viewers find themselves in familiar and fantasy dimensions simultaneously.</p>
</div>

<?php footer(); ?>
