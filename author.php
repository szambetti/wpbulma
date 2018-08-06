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
      <section class="section">
        <h1 class="title has-text-centered is-capitalised"><?php the_author(); ?>.</h1>
        <h2 class="subtitle has-text-centered">
          Tutti i contenuti, news e foto di <?php the_author(); ?>.
        </h2>
          <div class="container">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <article class="media">
                  <?php if(has_post_thumbnail()) : ?>
                  <figure class="media-left">
                    <p class="image is-128x128">
                      <?php echo the_post_thumbnail();?>
                    </p>
                  </figure>
                <?php endif; ?>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong><p class="title is-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <p class="subtitle is-6">Scritto da <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a>, il
                        <time><?php echo get_the_date(get_option('date_format')); ?> alle <?php the_time( 'H:i' ); ?></time></p></strong>
                        <br>
                        <?php the_excerpt(); ?>
                      </p>
                    </div>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php else : ?>
          <p><?php __('Nessun articolo'); ?></p>
        <?php endif; ?>
        </div>
      </section>
<?php get_footer(); ?>
