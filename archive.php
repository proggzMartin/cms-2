<!-- Copied from page.php with a few changes. -->
<?php get_header();?>

<div class="container mt-5">
  <div class="row">
    <div class="col-auto">
      <h1>
        <?php single_cat_title();?>
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <h3>
          <?php the_title();?>
        </h3>
        <?php the_excerpt();?>
      <?php endwhile; endif;?>
    </div>
  </div>
</div>

<?php get_footer();?>