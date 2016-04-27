<?php
/**
 * integer_net AlternativeTaxConfiguration Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_AlternativeTaxConfiguration
 * @copyright  Copyright (c) 2015 integer_net GmbH (http://www.integer-net.de/)
 * @license    http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @author     Andreas von Studnitz <avs@integer-net.de>
 * */

class IntegerNet_AlternativeTaxConfiguration_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     * @event controller_action_predispatch
     */
    public function controllerActionPredispatch(Varien_Event_Observer $observer)
    {
        $currentCustomerGroupId = Mage::getSingleton('customer/session')->getCustomerGroupId();
        if (!in_array($currentCustomerGroupId, explode(',', Mage::getStoreConfig('alternative_tax/groups/type')))) {
            return;
        }
        
        foreach(Mage::helper('integernet_alternativetaxconfiguration')->getConfigPaths() as $configPath) {

            $value = Mage::getStoreConfig('alternative_tax/' . $configPath);
            if (strpos($configPath, 'baseprice/') === 0) {
                Mage::app()->getConfig()->setNode('stores/' . Mage::app()->getStore()->getCode() . '/catalog/' . $configPath, $value);
            } else {
                Mage::app()->getConfig()->setNode('stores/' . Mage::app()->getStore()->getCode() . '/tax/' . $configPath, $value);
            }
        }
    }
}
