<?php
/*
Template Name: Event Lisstings
*/
get_header(); ?>

<div id="loop-container" class="loop-container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>
			<div <?php post_class(); ?>>
				<?php do_action( 'page_before' ); ?>
				<article>
					<?php ct_apex_featured_image(); ?>
					<div class="post-container">
						<div class='post-header'>
							<h1 class='post-title'><?php the_title(); ?></h1>
						</div>
						<div class="post-content">
							<?php echo get_the_content(); ?>
							
						</div>

						<!--- Loop Through the Events --->
						<?php global $post; // required
							global $post;
						    $eventArgs = array( 'posts_per_page' => 20, 'post_type' => 'event');
						    $posts = get_posts( $eventArgs );
						    foreach ( $posts as $post ) : setup_postdata( $post );
						    	echo 'post id: ' . $post->ID;
						    	echo 'post id: ' . $post->title;
						    	

									$venue = get_field('venue');

									// Venue information!!

									if( $venue ): 
										foreach( $venue as $v ): 
									    	$title = get_the_title( $v->ID );
									    	$website_link = get_field('website_link', $v->ID);
									    	$icon = get_field('icon', $v->ID);

									    	echo '<h2>' . $title . '</h2>';
									    	echo '<a href="' . $website_link . '">view website</a><br>';
									    	echo '<img src="' . $icon['url'] . '" />';

									    	// venue photos //
									    	if( have_rows('photos', $v->ID) ) :
									    		echo 'HAVE ROWS!';
									    		while ( have_rows('photos', $v->ID) ): the_row();
									    			$photo_title = get_subfield('photo_title');
									    			$photo_image = get_subfield('photo_image');

									    			echo 'Photos: ';
									    			echo $photo_title;
									    			print_r($photo_image);
									    		endwhile;
									    	endif;



										endforeach;
						       		endif;

    						endforeach; 
    						wp_reset_postdata();

						?>

 


						<section class="event-listings">
							<h2>THis is a test.</h2>
						</section>



					</div>
					<?php do_action( 'page_after' ); ?>
				</article>
				<?php comments_template(); ?>
			</div>
		<?php endwhile;
	endif; ?>
</div>
<?php get_footer();