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
    <div class="item active"> <?php img_tag('In-between-the-lines-1---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('In-between-the-lines-2---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('In-between-the-lines-3---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('In-between-the-lines-4---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('In-between-the-lines-5---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('In-between-the-lines-6---2010.jpg'); ?> </div>
    <div class="item"> <?php img_tag('In-between-the-lines-7---2010.jpg'); ?> </div>
  </div>
<?php include_once INCPATH.'carousel_controls.php'; ?>
</div>

<div class="container description">
  <h2>IN BETWEEN THE LINES</h2>
  <h3>2010</h3>

<p>In between the lines is made with Smalti, unglazed ceramic, stained glass, mirrors, turquoise, 3D objects, holograms, lenticular objects, broken china.
<br><br>
80 cm diameter.
<br><br>
Has been exhibited at the Southfield Art gallery in Richmond, London - 2012
<br><br>
photo credit: Simon Martner

</p>
</div>

<?php footer(); ?>
