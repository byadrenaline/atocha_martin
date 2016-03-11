<?php 

/* CALL TO ACTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'call_to_action' ){

	$cta_titulo = get_sub_field('cta_titulo');
	$cta_subtitulo = get_sub_field('cta_subtitulo');
	$cta_anchor = get_sub_field('cta_anchor');
	
	?>
	<section class="wrapper clearfix">
		<div class="calltoaction">
				
			<?php if($cta_titulo): ?>
				<h4><?php echo $cta_titulo; ?></h4>
			<?php endif ?>
			
			<?php if($cta_subtitulo): ?>
				<h4><?php echo $cta_subtitulo; ?></h4>
			<?php endif ?>
			<?php if($cta_anchor): ?>
				<a class="btn"><?php echo $cta_anchor; ?></a>
			<?php endif ?>
				
		</div>
	</section>

	<?php
}