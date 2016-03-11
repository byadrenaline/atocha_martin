<?php 

/* QUOTE
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'hero_block' ){

	$hero_titulo = get_sub_field('hero_titulo');
	$hero_seo = get_sub_field('hero_seo');
	$hero_bg = get_sub_field('hero_img_bg');

	?>
	<section class="hero" style="<?php if($hero_bg){ echo 'background-image: url(' . $hero_bg['url'] . ');' ;}?>">
		
		<div class="hero__claim">
			
			<p>
				<?php echo $hero_titulo; ?>
			</p>

			<h1>
				<?php echo $hero_seo; ?>
			</h1>
		
		</div>
	</section>
	<?php
}

