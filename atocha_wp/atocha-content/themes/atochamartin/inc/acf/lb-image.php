<?php 

/* VIDEO
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'image' ){

	$image = get_sub_field('image_bg');
	$wrapper = get_sub_field('image_wrapper');
	$alto = get_sub_field('image_alto');
	$diagonal_superior = get_sub_field('image_diagonal_superior');
	$diagonal_inferior = get_sub_field('image_diagonal_inferior');

	?>


	<?php if($wrapper): ?>
	
		<section class="image-module" style="background-image: url(<?php echo $image['url']; ?>); height: <?php echo $alto . 'px'; ?>">
			
			<?php if($diagonal_superior): ?>
				<div class="<?php echo $diagonal_superior; ?>"></div>
			<?php endif ?>
			
			<?php if($diagonal_inferior): ?>
				<div class="<?php echo $diagonal_inferior; ?>"></div>
			<?php endif ?>
			
		</section>

	<?php else: ?>

		<section class="image-module">
			<div class="wrapper">
				<figure>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</figure>
			</div>
		</section>

	<?php endif; ?>



	<?php
}