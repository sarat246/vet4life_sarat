<?php
/*
Template Name: Front Page Template
*/
?>

<?php get_header(); ?>

			<div id="content">
				<div class="slider_box">
					<ul class="slider_list">
				        <?php query_posts(array( 'post_type' => 'slider', 'posts_per_page' => -1 )); ?>
				                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				                  	<?php if (has_post_thumbnail( $post->ID ) ): ?>
				                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				                          $image = $image[0]; ?>
				                    <?php endif; ?>
				                    <li style="background:url('<?php echo $image; ?>') center center no-repeat;">
				                        <div class="wrap clearfix">
				                        	<?php the_content(); ?>
				                        </div>
				                                                
				                    </li>
				      		      
				                    <?php endwhile; else: ?>
				                    <p>Sorry, no posts matched your criteria.</p>
				                <?php endif; ?>
				        <?php wp_reset_query(); ?>
        			</ul>
				</div>

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> >

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

							</article> <!-- end article -->

							<?php endwhile; ?>

							<?php endif; ?>

						<div class="fourcol first white_box in_touch">
							<h1>Get In Touch</h1>
							<p class="phone_mail"><i class="icon-phone"></i><strong>0208 977 3955</strong><br><i class="icon-mail"></i><a href="mailto:mail@vet4life.co.uk"><strong>mail@vet4life.co.uk</strong></a></p>
							<div class="map_small">
								<a href="" class="map_overlay"></a>
								<p class="address">Vet4life, 160 High Street,<br>Teddington, Middlesex<br>TW11 8HZ</p>
							</div>
							<h4>Opening Hours:</h4>
							<p class="timings">Mon-Fri 8am - 7.30pm<br>Sat 8.30am - 5pm</p>
						</div>
						<div class="fourcol white_box latest_news">
							<h1>Latest News</h1>
							<ul>
						        <?php $the_query = new WP_Query( 'showposts=4' ); ?>
						          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						            <li>
						            <!-- <div class="date_block">
						            	<span class="date_num"><?php the_time('d'); ?></span>
						            	<span class="month_let"><?php the_time('M'); ?></span>
						            </div> -->
						              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						            </li>
						        <?php endwhile;?>
						</ul>
						</div>
						<div class="fourcol last white_box social_logos">
							<h1>Follow Us</h1>
							<?php bones_social_buttons(); ?>
						</div>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
