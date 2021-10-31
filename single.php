<!-- for single blogpostss -->

<!-- Copied from page.php. for nbow. -->
<?php get_header();?>

<div class="container mt-5">
  <div class="row">
    <div class="col-auto">
      <!-- Dynamic display of title set in WP -->
      <h1><?php the_title();?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
      <?php endif;?>

      <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
      <?php endwhile; endif;?>
    </div>
  </div>
</div>

<?php get_footer();?>