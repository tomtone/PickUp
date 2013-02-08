<?php

class TvG_Pickup_Block_Adminhtml_Info extends Mage_Payment_Block_Info
{
    /**
    * Set template for invoice information
    *
    * @return void
    */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('pickup/info.phtml');
    }
}