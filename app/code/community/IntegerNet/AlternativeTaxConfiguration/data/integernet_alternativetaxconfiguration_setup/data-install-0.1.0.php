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

$configPaths = array(
    'display/type',
    'display/shipping',
    'cart_display/price',
    'cart_display/subtotal',
    'cart_display/shipping',
    'cart_display/grandtotal',
    'cart_display/full_summary',
    'cart_display/zero_tax',
    'sales_display/price',
    'sales_display/subtotal',
    'sales_display/shipping',
    'sales_display/grandtotal',
    'sales_display/full_summary',
    'sales_display/zero_tax',
);

foreach ($configPaths as $configPath) {
    $installer->setConfigData('alternative_tax/' . $configPath, Mage::getStoreConfig('tax/' . $configPath));
}

$installer->endSetup();