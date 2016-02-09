
<?php get_header();  ?>
<div class="main clearfix">
	<div id="primary">
      <div id="content">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
          <div class="entry-content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" />
    		<a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
    		<?php the_content(); ?>
            <!-- <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
            <p>We also make pancakes on the side.</p> -->
          </div>
  		</article>
  		<?php endwhile; else : ?>
	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	    <?php endif; ?>
      </div>
	</div>
    <div id="secondary" class="widget-area" role="complementary">
    <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer();  ?>