<?php get_header(); ?>
	<?php bytravel_add_slider();?>
	<div id="main-page-container">
			<?php if ( have_posts() ) : ?>
    			<?php while ( have_posts() ) : the_post(); ?>
    				<?php if(is_category()){ ?>
    						<a href="<?php the_permalink(); ?>" class="blog-post-container">
    							<div class="blog">
    								<?php the_post_thumbnail('medium')?>
    								<div class="blog-title"><?php the_title()?></div>
    							</div>
    						</a>
    				<?php } else {?>
						<div id="article">
		  				<div id="article-inner">
		  					<?php the_content()?>
		  				</div>
						</div>
        			<?php }?>
    			<?php endwhile; ?>
			<?php endif; ?>
	<?php get_sidebar();?>
	</div>
<?php get_footer(); ?>
