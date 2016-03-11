<?php 

/* ZONAS DEPILACION
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'zonas' ){ 
	$sexo = get_sub_field('tab_sexo');
	
	if(have_rows('tab')):
	
	?>

	
	
	<section class="zonas-module <?php echo $sexo; ?>">
		<div class="wrapper clearfix">
			<div class="zonas-module--tabs column column__half flow-opposite">

				<ul>
					<?php while(have_rows('tab')):the_row(); ?>
						<li class="zonas-module--tab">
							<p class="zonas-module--icon"><?php the_sub_field('tab_zona'); ?></p>
							<p class="zonas-module--incluye"><?php the_sub_field('tab_incluye'); ?></p>
						</li>
					<?php endwhile; ?>
				</ul>

			</div>
			<div class="zonas-module--content column column__half">
				
				<?php while(have_rows('tab')):the_row(); ?>
				<div class="zonas-module--content-wrap">
					<?php
						$image = get_sub_field('tab_imagen');
						$precio1 = get_sub_field('tab_precio_1');
						$precio5 = get_sub_field('tab_precio_5');
					?>
					<figure>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="zonas-module--image">
					</figure>

					<div class="zonas-module--precios clearfix">
						<div class="column column__half">
							<?php _e('1 Sesion', 'byadr'); ?><br><strong><?php echo $precio1 . '€'; ?></strong>
						</div>
						<div class="column column__half">
							<?php _e('5 Sesiones', 'byadr'); ?><br><strong><?php echo $precio5 . '€'; ?></strong>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				
			</div>
		</div>
	</section>


	<?php
	endif;
}	