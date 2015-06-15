<?php


class Mook_Rene_Block_AdminHtml_Rene extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function _construct()
    {

        $this->_controller = 'adminhtml_rene';
        $this->_blockGroup = 'mook_rene';
        $this->_headerText = Mage::helper('mook_rene')->__('Item Manager');
        $this->_addButtonLabel = Mage::helper('mook_rene')->__('Add Item');

        parent::_construct();
    }
}
