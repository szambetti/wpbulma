<?php if(is_single()) : ?>

  <p class="title is-1"><?php the_title(); ?>
  <p class="subtitle is-5">scritto da <?php the_author(); ?>
    il <?php echo get_the_date(get_option('date_format')); ?></p></p>
  <hr style="width: 100%; color: 5px solid black;">
    <p style="text-align: justify !important; color: black;">
        <?php the_content(); ?>
    </p>
  <hr style="width: 100%; color: 5px solid black;">

<?php else : ?>

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

<?php endif; ?>
