			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
				<?php query_posts(array( 'post_type' => 'testimonials', 'posts_per_page' => -1 )); ?>
			                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="testimonials">
						<p><em><?php the_content(); ?></em></p>
						<h1><?php the_title(); ?></h1>
					</div>
				<?php endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
	                <?php endif; ?>
		        <?php wp_reset_query(); ?>
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.co.uk  &nbsp; &nbsp;|&nbsp; &nbsp;   <a href="">Terms & Conditions</a>   &nbsp; &nbsp;| &nbsp; &nbsp;  <a href="">Cookie Policy</a></p>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->
		</div> <!--/#inner-wrap-->
		</div> <!--/#outer-wrap-->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
