<?php
// -- contact.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row">
<div class="container">
<?php
img_tag('contact-asset.jpg');
?>
  <div class="contact-info col-sm-6 col-md-6">
    <h2>CONTACT</h2>
    <hr>
 <h3>   For any queries please do not hesitate to contact me</h3>
    <span class="mobile">(m) 078 4030 3103</span><br>
    <span class="work">(w) 020 8 690 00 14</span><br>
    <span class="email">(e) <a href="mailto:tempovision68@gmail.com" title="send me an email">tempovision68@gmail.com</a></span>
      <div class="social-icons">
      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
      </div>
  </div>
</div>
</div>
<?php footer(); ?>
