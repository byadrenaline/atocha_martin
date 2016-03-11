
<footer>
	<div class="column column__full clearfix">
		<div class="column column__third">
			<?php byadr_social(); ?>
		</div>
		<div class="column column__third">
			 <nav class="nav__footer"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></nav> 
		</div>
		<div class="column column__third">
			<?php byadr_contacto(); ?>
		</div>
	</div>
	<div class="wrapper clearfix">
		<p><?php printf( __( 'Copyright ©%s. Todos los derechos reservados.', 'byadr' ), date( 'Y' ) ); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>