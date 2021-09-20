<?php
function divi_child_enqueue_styles() {
    wp_enqueue_style( 'divi-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'divi-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'divi-style' ), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'divi_child_enqueue_styles' );

function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/css/admin-css.css');
  }
add_action('admin_enqueue_scripts', 'admin_style');

/* HTML DEL SCROLLBAR */
function load_scroll_html(){
        ?>
        <div class="scroll_bar"></div>
        <?php
}
add_action('wp_head', 'load_scroll_html');

/* SCRIPT EN EL FOOTER */
function load_page_scroll() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery(window).scroll(function(){
                wintop = jQuery(window).scrollTop();
                docheight = jQuery("body").height();
                winheight = jQuery(window).height();

                varscrolltrigger = 0.95;
                jQuery(".scroll_bar").css("width", (wintop/(docheight-winheight))*100+"%");
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'load_page_scroll');

/* Funcionalidad para estimar el tiempo de lectura en posts */
function read_time($title, $id = null) {	
	if(is_single()){
		$entrada = get_post();
		$ppm      = 320; // podemos escoger el PPM que queramos (200-300, por ejemplo)
		$palabras = str_word_count( strip_tags( $entrada->post_content ) );
		$minutos  = floor( $palabras / $ppm );
		$segundos = floor( ( $palabras % $ppm ) / ( $ppm / 60 ) );

		if ( 1 <= $minutos ) {
			$tiempo_estimado = $minutos . ' minuto' . ( 1 === $minutos ? '' : 's');
			if ( $segundos > 0 ) {
				$tiempo_estimado .= ', ' . $segundos . ' segundo'  . ( 1 === $segundos ? '' : 's' );
			}
		} else {
			$tiempo_estimado = $segundos . ' segundo' . ( 1 === $segundos ? '' : 's' );
		}
		if (in_the_loop()) {
			$title = '<p class="tiempo-estimado">Tiempo de lectura aprox: ' . $tiempo_estimado .'</p>' . $title;
		}		
	}  
	return $title;
}

add_filter( 'the_content', 'read_time', 10, 2 );