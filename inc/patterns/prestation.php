<?php
function exp_prestation_pattern() {

register_block_pattern(
	'expertempo/exemple-prestation',
	array(
		'title'       => 'Exemple de prestation',
		
		'description' => 'Inclut un titre et une liste à puces. Plusieurs blocs de ce type accolés auront un fond blanc ou coloré en alternance',
		
		'content'     => "<!-- wp:group {\"className\":\"prestation\"} -->\n<div class=\"wp-block-group prestation\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"level\":3} -->\n<h3>Titre</h3>\n<!-- /wp:heading -->\n\n<!-- wp:list -->\n<ul><li>Item 1</li><li>Item 2</li></ul>\n<!-- /wp:list --></div></div>\n<!-- /wp:group -->",
		
		'categories'  => array('expertempo'),
	)
);

}    
add_action( 'init', 'exp_prestation_pattern' );