<?php get_header(); ?>
<?php
  global $wp_query;
?>
<?php while(have_posts()){the_post();
  //the_content();
} ?>

<section class="homeATF ATF">
  <img class="homeATFImg rowcol1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
  <h1 class="homeATFTitle rowcol1"><?php the_title(); ?></h1>
</section>



<section class="slider">
  <?php
  $args = array(
    'post_type'=>'product',
    'posts_per_page'=>4,
  );
  $blogPosts=new WP_Query($args); ?>

  <h3 class="sliderTitle title">DISCOVER THE LATEST</h3>
  <?php while($blogPosts->have_posts()){$blogPosts->the_post(); ?>
    <?php global $product; ?>

    <figure class="card">
      <a class="cardImg" href="<?php echo get_permalink(); ?>">
        <img class="cardImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <figcaption class="cardCaption">
        <p class="cardTitle"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
        <p class="productCardPrice"><a href="<?php echo get_permalink(); ?>"> <?php echo $product->get_price_html(); ?> </a></p>
      </figcaption>
    </figure>
  <?php } ?>

  <button class="sliderArrow" type="button" name="button">&#62;</button>

  <a class="btn" href="">View all</a>
</section>


<figure class="color">
  <img class="colorImg" src="<?php echo get_template_directory_uri(); ?>/img/color.jpg" alt="">
  <figcaption class="colorCaption">
    <h5 class="colorTitle"><nobr>SLOW FASHON</nobr></h5>
    <p class="colorTxt">Against the overproduction, we bet for exclusivity and take care of the people who work in the manufacturing process.</p>
    <a class="btn" href="">About us</a>
  </figcaption>
</figure>
    <!-- <div id="more_posts">Load More</div> -->


<?php get_footer(); ?>
