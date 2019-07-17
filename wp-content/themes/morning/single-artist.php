<?php

get_header(); ?>

<div id="loop-container" class="loop-container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>
			<div <?php post_class(); ?>>
				<?php //do_action( 'page_before' ); ?>
				<div class='post-header'>
					<h1><?php the_title(); ?></h1>
					<?php ct_apex_featured_image(); ?>
				</div>
				<article>

					
					<div class="post-container">
						
						<div class="post-content">
							<?php echo get_the_content(); ?>
							
							<section class="photos">
								<?php
									$i = 0;

							    	if( have_rows('photos') ):
							    		
							    		echo '<div class="slider">';
									    
									    while( have_rows('photos') ) : the_row();

									        //echo "<pre>".print_r($photo_image, true)."</pre><br><br>";

									        $i++;
							     			
									        $photo_title = get_sub_field('photo_title');
									        $photo_image = get_sub_field('photo_image');
									        $img_url = $photo_image['sizes']['container'];
									    
									        echo '
									        	<div class="image" style="background-image:url(' . $img_url . ')">
												</div>
									        ';

									    endwhile;
									    
									    echo '</div>';

									endif;

							    ?>
							</section>
							<section class="videos">
								<?php
									$i = 0;
									$videos = get_field('videos');
									if($videos.length) {
										//echo "<pre>".print_r($videos)."</pre><br><br>";
										echo '<div class="slider">';
										foreach($videos as $v):

											$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $v->ID ), 'large' )[0];				
											echo '
												<div style="padding:20px;">
													<div class="image" style="background-image:url(' . $image_url . ')">
														<img src="/wp-content/themes/morning/images/play-button-overlay.png" />
													</div>
												</div>
											';

											//echo get_the_title( $v->ID ) . ': ' . get_field('video_url', $v->ID) . '<br>';
				
										endforeach;
										echo '</div>';
									}
									
								?>
							</section>
						</div>
						



 





					</div>
					<?php do_action( 'page_after' ); ?>
				</article>
				<?php comments_template(); ?>
			</div>
		<?php endwhile;
	endif; ?>
</div>
<?php get_footer();