<?php get_header(); ?>
<?php
  $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg' );

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>
<section class="hero is-large" style="background: url('<?php bloginfo('template_url');?>/img/<?php echo $selectedBg; ?>') center;   background-size: 100%; border-bottom: 7px solid black">
    <div class="hero-body">
    </div>
  </section>
</section>
<section class="section">

  <div class="columns">
    <div class="column is-four-fifths has-text-justified">
      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part('content'); ?>
      <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="column">
      <?php if(is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>
