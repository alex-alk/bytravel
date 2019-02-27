<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="main-page-container">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Rezultatele căutării pentru: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post();

				echo '<a href='."'".get_permalink()."'".'class="search-container">';
				$title = get_the_title();
				echo '<div class="entry-title">'.$title.'</div>';
				the_post_thumbnail(); 

				echo '<div class="entry-footer">'.get_the_excerpt().'</div>'; 
					echo '</a>';
			endwhile;
		endif;
		?>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
