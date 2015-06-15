<?php


class Mook_Jueves_Block_Adminhtml_Jueves extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_jueves";
	$this->_blockGroup = "jueves";
	$this->_headerText = Mage::helper("jueves")->__("Jueves Manager");
	$this->_addButtonLabel = Mage::helper("jueves")->__("Add New Item");
	parent::__construct();
	
	}

}