			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
				<div class="twelvecol first">
					<?php query_posts(array( 'post_type' => 'testimonials', 'posts_per_page' => -1 )); ?>
								                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="testimonials">
							<div class="quote_left"><em class="icon-quote-left"></em></div>
							<div class="quote_content">
								<?php the_content(); ?>
								<h3 class="client_name"><?php the_title(); ?></h3>
							</div>
							<div class="quote_right"><em class="icon-quote-right"></em></div>
						</div>
					<?php endwhile; else: ?>
					                    <p>Sorry, no posts matched your criteria.</p>
						                <?php endif; ?>
							        <?php wp_reset_query(); ?>
			    </div>
			    <!-- <div class="fivecol footer_pets last">
			    	<img src="http://localhost/vet4life/wp-content/uploads/2013/10/footer_bg_03.png" alt="">
			    </div> -->
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<div class="twelvecol first copyright">
						<p class="source-org">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.co.uk  &nbsp; &nbsp;|&nbsp; &nbsp;   <a href="">Terms & Conditions</a>   &nbsp; &nbsp;| &nbsp; &nbsp;  <a href="">Cookie Policy</a></p>
					</div>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->
		</div> <!--/#inner-wrap-->
		</div> <!--/#outer-wrap-->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
