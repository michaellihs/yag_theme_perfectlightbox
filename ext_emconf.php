<?php

########################################################################
# Extension Manager/Repository config file for ext: "yag_theme_perfectlightbox"
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'YAG Theme PerfectLightbox',
	'description' => 'Theme for YAG gallery that integrates Perfect Lightbox for displaying Images.',
	'category' => 'plugin',
	'author' => 'Michael Knoll',
	'author_email' => 'mimi@kaktusteam.de',
	'author_company' => 'MKLV GbR',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid,perfectlightbox',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
            'perfectlightbox' => '3.1.3',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>