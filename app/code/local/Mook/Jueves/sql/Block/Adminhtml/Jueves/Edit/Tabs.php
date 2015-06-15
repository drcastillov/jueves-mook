<?php
class Mook_Jueves_Block_Adminhtml_Jueves_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("jueves_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("jueves")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("jueves")->__("Item Information"),
				"title" => Mage::helper("jueves")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("jueves/adminhtml_jueves_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
