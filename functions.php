<?php 

/* WIDGETS */
if (function_exists('register_sidebar'))
{
	register_sidebar(array(
		
	));
}

// Limite de caracteres
function excerpt($limit) {
	
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
	
}

/* Imagem destacada =========== */
add_theme_support('post-thumbnails');



// Abilitando o gerenciador de menus do Wordpress
if (function_exists('add_theme_support')) {
    add_theme_support('menu2');
}




?>