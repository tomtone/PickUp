<?
class TvG_Pickup_Block_Form_Pickup extends Mage_Payment_Block_Form
{
    /**
    * Init default template for block
    */
    protected function _construct()
    {
        $this->setTemplate('pickup/form/pickup.phtml');

        return parent::_construct();
    }
}