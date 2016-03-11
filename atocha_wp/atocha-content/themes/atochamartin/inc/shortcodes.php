<?php

/**
 * Shortcodes
 *
 * 1.- Botones
 *
 */


/* 1.- Botones
–––––––––––––––––––––––––––––––––––––––––––––––––– */

// [boton texto="" url="" tipo="" popup=""]

	add_shortcode( 'boton' , 'byadr_shortcode_boton' );

	function byadr_shortcode_boton($attr){

		// texto del botón
		if( isset( $attr['texto']) ):
			$txt_btn = $attr['texto'];
		else:
			$txt_btn = __('Pulsa aquí', 'byadr');
		endif;


		// URL Destino botón
		if( isset($attr['url']) ):
			$url_btn = $attr['url'];
		else:
			$url_btn = '#';
		endif;

		// PopUp
		if( isset($attr['popup']) ):
			$popup_btn = ' btn--popup';
		else:
			$popup_btn = '';
		endif;

		// Tipo / Diseño botón
		if( isset( $attr['tipo'] ) ):
			$tipo_btn = $attr['tipo'];

			if( $tipo_btn == 'primario' ):
				$tipo_class = 'btn__primary';
			elseif( $tipo_btn == 'secundario' ):
				$tipo_class = 'btn__secondary';
			endif;
		else:
			$tipo_class = '';
		endif;


		$boton = '<a class="btn '.$tipo_class.$popup_btn.' " href="'.$url_btn.'">' . $txt_btn . '</a>';

		return $boton;

	}

