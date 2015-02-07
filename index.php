<?php
// -- index.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="wrapper"> <!-- cool carousel -->
<div id="carousel">
<?php
img_tag('1.jpg');
?>
<?php
img_tag('2.jpg');
?>
<?php
img_tag('3.jpg');
?>
<?php
img_tag('4.jpg');
?>
<?php
img_tag('5.jpg');
?>

</div> <!-- end of #carousel -->
  <a href="#" id="prev" title="Show previous"> </a>
    <a href="#" id="next" title="Show next"> </a>

</div> <!-- end of #wrapper -->





<?php footer(); ?>
