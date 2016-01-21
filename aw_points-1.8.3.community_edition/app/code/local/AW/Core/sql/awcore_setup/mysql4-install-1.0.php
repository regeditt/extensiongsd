<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Points
 * @version    1.8.3
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$installer->run("
 CREATE TABLE IF NOT EXISTS {$this->getTable('awcore/logger')} (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255)  NOT NULL,
  `content` mediumtext  NOT NULL,
  `module` varchar(255)  NOT NULL,
  `object` varchar(255)  NOT NULL,
  `severity` varchar(255) NOT NULL,
  `visibility` tinyint(1) NOT NULL default '1',
  `custom_field_1` varchar(255) NOT NULL,
  `custom_field_2` varchar(255) NOT NULL,
  `custom_field_3` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `line` int(11) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `code` varchar(16) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `module` (`module`),
  KEY `severity` (`severity`),
  KEY `visibility` (`visibility`),
  KEY `custom_field_1` (`custom_field_1`),
  KEY `custom_field_2` (`custom_field_2`),
  KEY `custom_field_3` (`custom_field_3`),
  KEY `date` (`date`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();