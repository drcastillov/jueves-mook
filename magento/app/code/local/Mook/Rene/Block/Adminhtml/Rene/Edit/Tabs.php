<?php

class Mook_Rene_Block_Adminhtml_Rene_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('rene_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('mook_rene')->__('News Information'));
    }

    public function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label' => Mage::helper('mook_rene')->__('Item Information'),
            'title' => Mage::helper('mook_rene')->__('Item Information'),
            'content' => $this->getLayout()->createBlock('rene/adminhtml_rene_edit_tab_form')->toHtml(),
        ));

        return parent::_beforeToHtml();
    }

}