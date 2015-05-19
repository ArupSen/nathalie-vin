<?php
// -- index.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="home-carousel">
      <div class="slide">
        <?php img_tag('1a.jpg'); ?>
      </div>
      <div class="slide">
        <?php img_tag('2a.jpg'); ?>
      </div>
      <div class="slide">
        <?php img_tag('3a.jpg'); ?>
      </div>
      <div class="slide">
        <?php img_tag('4a.jpg'); ?>
      </div>
      <div class="slide">
        <?php img_tag('5a.jpg'); ?>
      </div>
</div> <!-- end of #home-carousel -->
      <div class="social-icons">
      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
      </div>
<?php footer(); ?>
