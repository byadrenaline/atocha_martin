<?php 

/* PREMIOS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'icon-block' ){

		 
		if( have_rows('icon_main') ): 

	?>
	
	<section class="icon-module">
		<?php while( have_rows('icon_main') ): the_row(); 
			$icon_titulo = get_sub_field('icon_titulo');
			$icon_code = get_sub_field('icon_code');
			$icon_color  = get_sub_field('icon_color');
			$icon_size  = get_sub_field('icon_size');
			$icon_content  = get_sub_field('icon_content');
			$icon_content_one  = get_sub_field('icon_content_one');
			$icon_content_two  = get_sub_field('icon_content_two');
			$icon_content_three  = get_sub_field('icon_content_three');
			$icon_content_four  = get_sub_field('icon_content_four');
		?>
	
			<div class="icon-content-padding wrapper clearfix">	
					<p class="<?php echo $icon_code; ?>" style="color:<?php echo $icon_color; ?>; font-size:<?php echo $icon_size; ?>px;"></p>
					<p class="icon-title"><?php echo $icon_titulo; ?></p>
					<a class="icon-tab" href=""></a>
					
					<?php if ($icon_content) : ?>
						<div class="icon-conten clearfix">						

							<?php

								if(get_sub_field('icon_content') == "column__full")
								{
								    print("

								    	<div class='column column__full'>$icon_content_one</div>

								    ");
 
								}	

								else if(get_sub_field('icon_content') == "column__half")
								{
									print("

								    	<div class='column column__half'>$icon_content_one</div>
								    	<div class='column column__half'>$icon_content_two</div>

								    ");
								}

								else if(get_sub_field('icon_content') == "column__third")
								{
									print("

								    	<div class='column column__third'>$icon_content_one</div>
								    	<div class='column column__third'>$icon_content_two</div>
								    	<div class='column column__third'>$icon_content_three</div>

								    ");
								}

								else if(get_sub_field('icon_content') == "column__fourth")
								{
									print("

								    	<div class='column column__fourth'>$icon_content_one</div>
								    	<div class='column column__fourth'>$icon_content_two</div>
								    	<div class='column column__fourth'>$icon_content_three</div>
								    	<div class='column column__fourth'>$icon_content_four</div>

								    ");
								}
							?>		 
						</div>
					<?php endif ?>
			</div>
	
		<?php endwhile; ?>
	</section>

<?php endif; ?>

	<?php
}


