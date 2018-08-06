<?php get_header(); ?>
<?php
  $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg' );

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>
<section class="hero is-medium" style="background: url('<?php bloginfo('template_url');?>/img/<?php echo $selectedBg; ?>') center;   background-size: 100%; border-bottom: 7px solid black">
    <div class="hero-body">
    </div>
  </section>
</section>
<section class="section">

      <div class="container" style="min-height: 38vh">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <p class="title is-1"><?php the_title(); ?>

          <hr style="width: 100%; color: 5px solid black;">
            <p style="text-align: justify !important; color: black;">
                <?php the_content(); ?>
            </p>
          <hr style="width: 100%; color: 5px solid black;">
      <?php endwhile; endif; ?>
      </div>

</section>

<?php get_footer(); ?>
