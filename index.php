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
      <section class="section">
        <h1 class="title has-text-centered">Contenuti.</h1>
        <h2 class="subtitle has-text-centered">
          Tutte le news, foto e articoli del club.
        </h2>
        <div class="columns">
          <div class="column is-four-fifths">
            <div class="container">
              <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                  <?php get_template_part('content'); ?>
                <?php endwhile; ?>
              <?php else : ?>
            <p><?php __('Nessun articolo'); ?></p>
          <?php endif; ?>
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
