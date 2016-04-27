<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_AlternativeTaxConfiguration
 * @copyright  Copyright (c) 2015 integer_net GmbH (http://www.integer-net.de/)
 * @author     Andreas von Studnitz <avs@integer-net.de>
 */
class IntegerNet_AlternativeTaxConfiguration_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getConfigPaths()
    {
        return array(
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
            'baseprice/base_price_incl_tax',
        );
    }
}