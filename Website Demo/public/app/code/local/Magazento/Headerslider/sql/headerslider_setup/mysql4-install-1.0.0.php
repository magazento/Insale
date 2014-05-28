<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

$installer = $this;

$installer->startSetup();

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('magazento_headerslider_slide')} (
  `slide_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `position` smallint(6) DEFAULT NULL,
  `content` text,
  `image_filename` text NOT NULL,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

");

$installer->endSetup();


?>