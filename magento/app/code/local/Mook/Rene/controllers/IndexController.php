<?php
 //http://localhost/magento/index.php/test/index/index/key/8f007624bb223d63130db988630a1be7/
class Mook_Rene_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        echo 123;
        exit;
        $this->loadLayout();
        $this->renderLayout();
    }
}
