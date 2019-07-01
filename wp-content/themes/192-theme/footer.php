</div> <!-- Aquí cierra el main-wrap -->

<?php if(true): ?>

<hr class="line-footer-divisor margintop-footer">

<footer class="footer">
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-7">
				<div class="footer__box">
	    			<img class="footer__logo" src="<?php echo THEMEURL ?>images/logo/logo-footer-dorado.png" alt="">
			
					<div class="menu">
						<?php get_template_part('views/footer/menu'); ?>
					</div>
					
					<div class="social">
						<?php get_template_part('views/footer/social'); ?>
					</div>
				</div>
			</div>
			<div class="grid__col-1-3">
				<?php get_template_part('views/footer/newsletter'); ?>
				<div class="creditos__box">
					<p class="creditos">9 años trabajando en y por el papel.</p>
					<p class="creditos">Somos una revista semestral editada en México.</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

<script type='text/javascript'>
	(function($) {
		window.fnames = new Array();
		window.ftypes = new Array();
		fnames[0]='EMAIL';
		ftypes[0]='email';
	}(jQuery));

	var $mcj = jQuery.noConflict(true);
</script>

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
