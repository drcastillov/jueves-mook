<?php

class Mook_Rene_Block_Adminhtml_Rene_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function _construct()
    {
        $this->_objectId = 'id';
        $this->_blockGroup = 'mook_rene';
        $this->_controller = 'adminhtml_rene';

        $this->_updateButton('save', 'label', Mage::helper('mook_rene')->__('Save Item'));
        $this->_updateButton('delete', 'labeñ', Mage::helper('mook_rene')->__('Delete Item'));
    }

    public function getHeaderText()
    {
        if(Mage::registry('rene_data') && Mage::registry('rene_data')->getId())
        {
            return Mage::helper('mook_rene')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('rene_data')->getTitle()));
        }
        else
        {
            return Mage::helper('mook_rene')->__('Add Item');
        }
    }
}