<?php
class Mook_Consultas_Adminhtml_ConsultasbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Productos"));
	   $this->renderLayout();
    }
}