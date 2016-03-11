<?php 

/* GRILLA IMAGENES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'grilla-imagenes' ){
	
	$images = get_sub_field('grilla_images');

	$wrapper = get_sub_field('grilla_wrapper');
	$alto = get_sub_field('grilla_alto');
	

	//var_dump($images);
	?>
	
	<section class="grilla-module" style="<?php if($bg_color){ echo 'background-color:' . $bg_color . ';' ;} ?>">

		<?php if( !$wrapper ): ?>
			<div class="wrapper">
		<?php endif; ?>
			<div class="clearfix grilla-module--container">
				<?php foreach( $images as $image ): ?>

					<div class="grilla-module--slide <?php echo 'grilla-module--slide__' . count($images); ?>" style="background-image: url(<?php echo $image['url']; ?>);height: <?php echo $alto . 'px'; ?>"></div>

				<?php endforeach; ?>
			</div>




		<?php // Fin wrapper ?>
		<?php if( !$wrapper ): ?>
			</div>
		<?php endif; ?>

	</section>


	<?php
}	