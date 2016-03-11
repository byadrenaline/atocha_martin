<?php 

/* EQUIPO
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'equipo_block' ){

	?>

<?php

$args = array( 
	'post_type' => 'equipo', 
	'nopagin' => true,
	 );

$loop = new WP_Query( $args );

?>



	
	<?php if( $loop->have_posts() ) : ?> 

		<section class="wrapper wrapper__main clearfix">

		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 

				<?php

				 $equipo_foto_completa = get_field('equipo_foto_completa');

				if( !empty($equipo_foto_completa) ): ?>

				<?php endif; ?>
		<a href="<?php the_permalink(); ?>">
		<article class="equipo_miembro column column__fourth" style="<?php if($equipo_foto_completa){ echo 'background-image: url(' . $equipo_foto_completa['url'] . ');' ;}?>">
		
			 
				<h3><?php the_title(); ?></h3>
				<figure><?php the_post_thumbnail(); ?></figure>

			


			
		</article>
	 	</a>
		<?php endwhile; ?>
			
		</section>

	<?php endif; ?>

<?php wp_reset_postdata(); ?>

	<?php
}





 


