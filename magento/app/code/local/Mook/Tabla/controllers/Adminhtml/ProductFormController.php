<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/06/15
 * Time: 12:55 PM
 */

class Mage_Tabla_Adminhtml_ProductForm extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function postAction()
    {
        $post = $this->getRequest()->getPost();
        try
        {
            if(empty($post))
            {
                Mage::throwException($this->__('Invalid form data.'));
            }
            $message = $this->__('Your form has been submitted successfully.');
            Mage::getSingleton('adminhtml/session')->addSuccess($message);
        }catch (Exception $e)
        {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        }
        $this->_redirect('*/*');
    }
}























