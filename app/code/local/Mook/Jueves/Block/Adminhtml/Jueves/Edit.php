<?php
	
class Mook_Jueves_Block_Adminhtml_Jueves_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "jueves";
				$this->_controller = "adminhtml_jueves";
				$this->_updateButton("save", "label", Mage::helper("jueves")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("jueves")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("jueves")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("jueves_data") && Mage::registry("jueves_data")->getId() ){

				    return Mage::helper("jueves")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("jueves_data")->getId()));

				} 
				else{

				     return Mage::helper("jueves")->__("Add Item");

				}
		}
}