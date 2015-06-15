<?php
class Mook_Productos_Adminhtml_ProductosbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Productos"));
	   $this->renderLayout();
    }
}