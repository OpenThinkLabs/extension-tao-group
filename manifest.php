<?php
	return array(
		'name' => 'TAO Groups',
		'description' => 'TAO Groups http://www.tao.lu',
		'additional' => array(
			'version' => '1.0',
			'author' => 'CRP Henry Tudor',
			'dependances' => array(),
			'install' => array( 
				'sql' => dirname(__FILE__). '/model/ontology/taosubjects.sql',
				'php' => dirname(__FILE__). '/install/install.php'
			),
			'configFile' => dirname(__FILE__). '/includes/common.php'

			

				
			
		)
	);
?>