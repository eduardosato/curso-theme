<?php
/*
Template Name: NOME DA PÁGINA
*/
get_header(); ?>
    <section id="corpo">
        <article>
            <h1>TITULO DA PÁGINA</h1>
                	
        	<?php query_posts('cat=3&showposts=30') ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="post-noticia">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo destacada(); ?>&w=456&h=337&zc=1&q=100" alt="<?php the_title(); ?>"/>
                    <h2><?php the_title(); ?></h2>
                </a>
                
            </div>
            <?php endwhile; wp_reset_query(); // end of the loop. ?>

        </article>
    </section>
<?php get_footer(); ?>