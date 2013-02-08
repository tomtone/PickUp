<?php

class TvG_Pickup_Model_Pickup extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'pickup';
    protected $_isInitializeNeeded      = false;
    protected $_canUseInternal          = true;
    protected $_canUseForMultishipping  = true;

    /**
     * Block type for payment info
     *
     * @var string
     */
    protected $_infoBlockType = 'pickup/adminhtml_info';

    /**
     * Block type for payment info
     *
     * @var string
     */
    protected $_formBlockType = 'pickup/form_pickup';

    /**
     * Can be used in regular checkout
     *
     * @return bool
     */
    public function canUseCheckout()
    {
        $groupId = Mage::getSingleton('customer/session')->getCustomer()->getGroupId();
        $allowedGroups = explode(',', $this->getConfigData('specificgroup'));
        foreach($allowedGroups as $key => $val){
           if(empty($val)){
               unset($allowedGroups[$key]);
           }
        }
        if(count($allowedGroups)){
            return in_array($groupId, $allowedGroups);
        }else{
            return true;
        }
    }


}