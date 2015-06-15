<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/06/15
 * Time: 11:51 AM
 */


class Mook_Tabla_IndexController extends Mage_Adminhtml_Controller_Action//Mage_Core_Controller_Front_Action //
{
    public function indexAction()
    {
        //http://localhost/magento/index.php/tabla
        echo 123;
        exit;
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

