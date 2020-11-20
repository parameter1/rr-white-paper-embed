<?php

$wpId = get_query_var('wpembed');
$post = get_post(absint($wpId));
$whitePaper = new \RRWordPress\WhitePaper\WhitePaper($post);

$imagePost = false;
if(!empty($whitePaper->getPostmeta('white_paper_image'))) {
  $imagePost = $whitePaper->getImagePost();
}

$description = $whitePaper->getPostmeta('white_paper_description');
$form = $whitePaper->getPostmeta('white_paper_gravity_form');

?>

<?php get_header(); ?>
<!-- <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script> -->

<div class="rr-white-paper">
  <div class="row">
    <div class="col-md-12">
      <p class="small">Sponsored Information</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5 col-sm-4 col-xs-12 white-paper-col-5 hidden-xs">
      <?php if ($imagePost) echo '<img class="img-responsive" src="' . $imagePost->guid . '">'; ?>
    </div>

    <div class="col-md-7 col-sm-8 col-xs-12 white-paper-col-7">
      <?php if ($description) echo $description; ?>
      <h2 class="form-headline hidden-xs">
        <i class="fa fa-arrow-down"></i>
        DOWNLOAD THE FULL REPORT
        <i class="fa fa-arrow-down"></i>
      </h2>

      <div class="white-paper-form">
        <?php
        if ($form) {
          $whitePaper->displayGravityForm();
        } else {
          echo "This paper is no longer available.";
        }
        ?>
        <span class="white-paper-flag"></span>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
