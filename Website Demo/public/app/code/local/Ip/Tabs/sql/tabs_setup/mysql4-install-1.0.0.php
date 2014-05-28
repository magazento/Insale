<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence [\\"Single Use\\"]
 */
?>
<?php

$installer = $this;
$installer->startSetup();
$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('ip_tabs_tab')} (
  `tab_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `content` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `position` tinyint(10) NOT NULL DEFAULT '0',
  `align_tab` varchar(10) NOT NULL,
  `css_style` text NOT NULL,
  `css_class` varchar(100) NOT NULL,
  `css_style_content` text NOT NULL,
  `css_class_content` varchar(100) NOT NULL,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

CREATE TABLE IF NOT EXISTS {$this->getTable('ip_tabs_tab_store')} (
  `tab_id` smallint(6) unsigned DEFAULT NULL,
  `store_id` smallint(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();
?>