		<!-- footer section start -->
		<footer class="footer" id="contact">
			<div class="container">
				<div class="row">
                    <div class="col-lg-12">
						<!-- Copyright -->
						<div class="copyright-area"> <p><?php the_field('copyright','option'); ?> </p></div>
                    </div>
				</div>
			</div>
		</footer><!-- footer section end -->

		<!-- back to top -->
		<?php if( get_field('activar_back_to_top','option') ): ?>
			<a href="#" class="scrollToTop"> <i class="icofont icofont-arrow-up"></i> </a>
       	<?php endif; ?>	

    <?php wp_footer();?>	

	</body>
</html>