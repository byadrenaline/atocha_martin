<?php 

/* SLIDER PRECIOS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'slider_precios' ){

	if(have_rows( 'slider' ) ):
	?>
	<section class="slider slider__precios">
		<?php while( have_rows( 'slider' ) ) : the_row(); ?>

			<?php 
				$imagen = get_sub_field('slider-imagen');
				$claim = get_sub_field('slider-claim');
				$oferta = get_sub_field('slider-oferta');
				$precio = get_sub_field('slider-precio');
				$link = get_sub_field('slider-oferta-link');

			?>
			<div class="slider--slide" <?php if($imagen): ?>style="background-image: url(<?php echo $imagen['url'];?>);"<?php endif; ?>>
				<!--<img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>">-->
				<p class="slider--claim"><?php echo $claim; ?></p>
				<div class="slider--oferta">
					<?php echo $oferta; ?>
					<p class="slider--precio"><?php echo $precio . '€'; ?></p>
					<a href="<?php echo $link; ?>" class="btn btn__white"><?php _e('Ver oferta', 'byadr'); ?></a>
				</div>
			</div>
		<?php endwhile; ?>
	</section>
	<?php
	endif;
}