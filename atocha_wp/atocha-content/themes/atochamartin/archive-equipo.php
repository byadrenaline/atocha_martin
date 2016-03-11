<?php get_header(); ?>

<section class="hero" style="background-image: url(http://localhost/atocha_martin/atocha_wp/atocha-content/uploads/2016/03/custom-header.jpg);">
		
	<div class="hero__claim">	
		<p>
			Cuerpo de bailaries
		</p>
		<h1>
			Equipo de Atocha Martin
		</h1>
		
	</div>
</section>

<section class="equipo-block wrapper wrapper__main clearfix">

<nav class="equipo__nav clearfix"><?php wp_nav_menu( array( 'theme_location' => 'equipo-menu') ); ?></nav>

<?php

$args = array( 
	'post_type' => 'equipo', 
	'nopagin' => true,
	 );

$loop = new WP_Query( $args );

?>
	<?php if( $loop->have_posts() ) : ?> 
		
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
		
	<?php endif; ?>

<?php wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>