<?php

$installer = $this;

$installer->startSetup();

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('sales_quote_custom')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `quote_id` int(11) unsigned NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS {$this->getTable('sales_order_custom')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `order_id` int(11) unsigned NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `sales_flat_quote` ADD `refferal_id` VARCHAR(50);

ALTER TABLE `sales_flat_order` ADD `refferal_id` VARCHAR(50);

");

$installer->endSetup(); 