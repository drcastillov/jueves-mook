<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
DROP TABLE IF EXISTS test;
CREATE TABLE test (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY UNSIGNED ,
 `code` VARCHAR( 50 ) NOT NULL ,
 `name` VARCHAR( 50 ) NOT NULL ,
 `description`  TEXT
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 