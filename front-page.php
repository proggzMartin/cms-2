<!-- Copied from page.php with a few changes. -->
<?php get_header();?>

<?php 
  $title = get_field('page_title');
  $description = get_field('page_description');
  $link = get_field('page_link');
  $imageArray = get_field('page_image');
  $image = $imageArray['sizes']['large']; //var kommer den ifrån?
?>

<div class="container mt-5">
  <div class="row">
      <img class="img img-fluid" src="<?php echo $image;?>">
  </div>
  <div class="row">
    <div class="col">
      <!-- Dynamic display of title set in WP -->
      <h1><?php echo $title?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php echo $description?>
    </div>
  </div>
</div>
<?php get_footer();?>