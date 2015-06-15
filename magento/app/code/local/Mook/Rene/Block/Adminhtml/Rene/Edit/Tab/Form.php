<?php

class Mook_Rene_Block_Adminhtml_Rene_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('rene_form', array('legend' => Mage::helper('mook_rene')->__('Item Information')));

        $fieldset->addField('title', 'text', array(
            'label' => Mage::helper('mook_rene')->__('Title'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'title',
        ));

        $fieldset->addField('status', 'select', array(
            'label' => Mage::helper('mook_rene')->__('Status'),
            'name' => 'status',
            'values' => array(
                'value' => 1,
                'label' => Mage::helper('mook_rene')->__('Active'),
            ),

            array(
                'value' => 0,
                'label' => Mage::helper('mook_rene')->__('Inactive'),
            ),
        ));

        $fieldset->addField('content','editor', array(
           'name' => 'content',
            'label' => Mage::helper('mook_rene')->__('Content'),
            'title' => Mage::helper('mook_rene')->__('Content'),
            'style' => 'width:98%; height:400px;',
            'wysiwyg' => false,
            'required' => true,
        ));

        if(Mage::getSingleton('adminhtml/session')->getReneData())
        {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getReneData());
            Mage::getSingleton('adminhtml/session')->setReneData(null);
        }
        elseif(Mage::registry('rene_data'))
        {
            $form->setValues(Mage::registry('rene_data')->getData());
        }

        return parent::_prepareForm();
    }
}