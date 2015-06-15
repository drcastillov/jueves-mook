<?php

//http://localhost/magento/index.php/test/adminhtml_rene/index/key/007b824d647395d32a02115ac515f605/
class Mook_Rene_Adminhtml_ReneController extends Mage_Adminhtml_Controller_Action
{
    protected function _initAction()
    {

        $this->loadLayout()
            ->_setActiveMenu('rene/items')
            ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));

        return $this;
    }

    public function indexAction()
    {
        $this->_initAction();
        $this->_addContent($this->getLayout()->createBlock('mook_rene/adminhtml_rene'));
        $this->renderLayout();
    }

    public function editAction()
    {
        $reneId = $this->getRequest()->getParam('id');
        $reneModel = Mage::getModel('rene/rene')->load($reneId);
        if($reneModel->getId() || $reneId == 0)
        {
            Mage::register('rene_data', $reneModel);

            $this->loadLayout();
            $this->_setActiveMenu('rene/items');

            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

            $this->getLayout()->getBlock('head')->setcanLoadExtJs(true);

            $this->_addContent($this->getLayout()->createBlock('rene/adminhtml_rene_edit'))
                ->_addLeft($this->getLayout()->createBlock('rene/adminhtml_rene_edit_tabs'));

            $this->renderLayout();
        }
        else
        {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('mook_rene')->__('Item does not exist'));
            $this->_redirect('*/*/');

        }

    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function saveAction()
    {
        if ( $this->getRequest()->getPost() ) {
            try {
                $postData = $this->getRequest()->getPost();
                $reneModel = Mage::getModel('rene/rene');

                $reneModel->setId($this->getRequest()->getParam('id'))
                    ->setTitle($postData['title'])
                    ->setContent($postData['content'])
                    ->setStatus($postData['status'])
                    ->save();

                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully saved'));
                Mage::getSingleton('adminhtml/session')->setReneData(false);

                $this->_redirect('*/*/');
                return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setReneData($this->getRequest()->getPost());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        $this->_redirect('*/*/');

    }

    public function deleteAction()
    {
        if($this->getRequest()->getParam('id') > 0)
        {
            try
            {
                $reneModel = Mage::getModel('rene/rene');
                $reneModel->setId($this->getRequest()->getParam('id'))
                    ->delete();

                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
                $this->_redirect('*/*/');
            }catch (Exception $e)
            {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            }
        }

        $this->_redirect('*/*/');
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('rene/adminhtml_rene_grid')->toHtml()
        );
    }
}
