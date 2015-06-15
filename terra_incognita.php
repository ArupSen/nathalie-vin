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
    <div class="item active"> <?php img_tag('Terra-Incognita-1---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Terra-Incognita-2---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Terra-Incognita-3---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Terra-Incognita-4---2014.jpg'); ?> </div>
    <div class="item"> <?php img_tag('Terra-Incognita-5---2014.jpg'); ?> </div>
  </div>

<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>TERRA INCOGNITA</h2>
  <h3>2014</h3>

<p>Terra Incognita is made of ceramic glazed tiles, stained glass, lego's, computer parts, clockwork parts and gold tiles .
<br><br>
2014
<br><br>
48 cm x 47 cm x 12 mm
<br><br>
Terra Incognita has been exhibited at the British exhibition “BrittaMosaica” to represent the essence of Contemporain British mosaic at the Museum des Beaux-Arts in Chartres in France - 2014
<br><br>
photo credit: Simon Martner
</p>
</div>

<?php footer(); ?>
