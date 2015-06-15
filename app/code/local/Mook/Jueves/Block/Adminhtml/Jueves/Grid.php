<?php

class Mook_Jueves_Block_Adminhtml_Jueves_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("juevesGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("jueves/jueves")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("jueves")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));

                $this->addColumn("code", array(
                    "header" => Mage::helper("jueves")->__("Code"),
                    "align" =>"right",
                    "width" => "50px",
                    "type" => "varchar",
                    "index" => "code",
                ));

                $this->addColumn("name", array(
                "header" => Mage::helper("jueves")->__("Name"),
                "align" =>"right",
                "width" => "50px",
                "type" => "varchar",
                "index" => "name",
                ));

                $this->addColumn("description", array(
                "header" => Mage::helper("jueves")->__("Description"),
                "align" =>"right",
                "width" => "50px",
                "type" => "text",
                "index" => "description",
                ));
                
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_jueves', array(
					 'label'=> Mage::helper('jueves')->__('Remove Jueves'),
					 'url'  => $this->getUrl('*/adminhtml_jueves/massRemove'),
					 'confirm' => Mage::helper('jueves')->__('Are you sure?')
				));
			return $this;
		}
			

}