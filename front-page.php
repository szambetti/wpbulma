<?php get_header(); ?>

    <div class="logo" style=''><img src="<?php bloginfo('template_url'); ?>/img/fishandfly.png" style='filter:drop-shadow(2px 2px 2px gray);'></div>
    <div class='freccia'><img src="<?php bloginfo('template_url'); ?>/img/freccia.png" style=" filter:drop-shadow(2px 2px 2px gray)"></div>
    <section class="hero is-warning is-fullheight">
    <div class="hero-body">
        <video autoplay="" loop="" muted="" poster="<?php bloginfo('template_url'); ?>/img/videoframe.png">
            <source src="<?php bloginfo('template_url'); ?>/img/bg_damsel_compressed.mp4" type="video/mp4">
        </video>
    </div>
  </section>
  <section class="section" style="border-bottom: 7px solid black">
    <div class="container">
      <h1 class="title has-text-centered is-2" id="news">NEWS</h1>
      <div class="columns is-centered">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 1, 'order'=> 'DESC', 'orderby' => 'date', 'category__in' => '9' );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
          setup_postdata( $post ); ?>
          <div class="column">
            <article class="message is-warning">
    <div class="message-body has-text-centered">
      <p class="title is-3 is-spaced"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>
      <?php the_content(); ?>
        <br><p class="subtitle is-5"> Postato il <time><?php echo get_the_date(get_option('date_format')); ?></time></p>
        </div>
  </article>

                </div>
              </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
    <h3 class="subtitle is-5 has-text-centered" style="position: relative; top: 20px">
    <a href="/wordpress/category/news/">Visualizza tutte le news</a>
  </h3>
  </section>
  <section class="section" style="border-bottom: 7px solid black">
    <div class="container">
      <h1 class="title has-text-centered is-2">CONTENUTI</h1>
      <h2 class="subtitle has-text-centered">
        Le ultime foto, articoli e guide del club.
      </h2>
      <div class="columns">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date', 'category__not_in' => '9' );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
          setup_postdata( $post ); ?>
          <div class="column is-one-third">
                  <div class="card">
                    <?php if(has_post_thumbnail()) : ?>
                  <div class="card-image">
                    <figure class="image is-4by3">
                    <?php echo the_post_thumbnail();?>
                    </figure>
                  </div>
                <?php endif; ?>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="title is-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <p class="subtitle is-6">Scritto da <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a>, il
                        <time><?php echo get_the_date(get_option('date_format')); ?> alle <?php the_time( 'H:i' ); ?></time></p>
                      </div>
                  <!--  <div class="content">
                      <br> <?php //the_excerpt(); ?>
                    </div>-->
                  </div>
                </div>                </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
    <h2 class="subtitle is-5 has-text-centered">
    <a href="/wordpress/articoli/">Visualizza tutto</a>
    </h2>
  </section>
  <section class="section">
    <div class="container" style="width: calc(50vw); min-width: 300px;">
      <h1 class="title has-text-centered is-2">YOUTUBE</h1>
      <h2 class="subtitle has-text-centered">
        L'ultimo video di costruzione.
      </h2>
      <div class="card">
  <div class="card-content">
    <iframe style="width: 100%; height: calc(50vh); position: relative; left: 50%; transform:translate(-50%,0)" src="https://www.youtube-nocookie.com/embed/1q_T5KJpI28" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  <footer class="card-footer">
    <p class="card-footer-item">
      <span>
        Visita il nostro <a href="#">canale Youtube</a> per vedere tutti i video.
      </span>
    </p>
  </footer>
</div>
  </section>
  <?php get_footer(); ?>
