<?php
class Mook_Jueves_Block_Adminhtml_Jueves_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{


				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("jueves_form", array("legend"=>Mage::helper("jueves")->__("Item information")));


                 $fieldset->addField('code', 'text', array(
                'label' => Mage::helper('jueves')->__('Code'),
                'name' => 'code',
                ));

                $fieldset->addField('name', 'text', array(
                'label' => Mage::helper('jueves')->__('Name'),
                'name' => 'name',
                ));

                $fieldset->addField('description', 'text', array(
                'label' => Mage::helper('jueves')->__('Description'),
                'name' => 'description',
                ));

				if (Mage::getSingleton("adminhtml/session")->getJuevesData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getJuevesData());
					Mage::getSingleton("adminhtml/session")->setJuevesData(null);
				} 
				elseif(Mage::registry("jueves_data")) {

				    $form->setValues(Mage::registry("jueves_data")->getData());
				}
				return parent::_prepareForm();



		}
}
