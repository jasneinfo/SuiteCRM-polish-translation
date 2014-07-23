<?php
$manifest = array( 
	'name' => 'Polskie Tłumaczenie aplikacji SuiteCRM',
	'readme' => '',
	'description' => 'Polish language pack for SuiteCRM',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '0.0.1',
	'published_date' => '20/07/2014',
	'author' => 'various',
	'acceptable_sugar_flavors' => array ('CE'),
	'icon' => 'include/images/pl.gif'
);
$installdefs = array(
	'id'=> 'pl_pl',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
		array('from'=> '<basepath>/include','to'=>'include'),
		array('from'=> '<basepath>/modules','to'=>'modules')
	)
);

