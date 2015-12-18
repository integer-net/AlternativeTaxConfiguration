<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_AlternativeTaxConfiguration
 * @copyright  Copyright (c) 2015 integer_net GmbH (http://www.integer-net.de/)
 * @author     Andreas von Studnitz <avs@integer-net.de>
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;

$installer->startSetup();

$configPaths = Mage::helper('integernet_alternativetaxconfiguration')->getConfigPaths();

foreach ($configPaths as $configPath) {
    $installer->setConfigData('alternative_tax/' . $configPath, Mage::getStoreConfig('tax/' . $configPath));
}

$installer->endSetup();