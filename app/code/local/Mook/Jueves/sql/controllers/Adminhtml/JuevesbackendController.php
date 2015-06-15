<?php
class Mook_Jueves_Adminhtml_JuevesbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Productos"));
	   $this->renderLayout();
    }

    public function postAction()
    {
        echo 'TEST';
    }

}