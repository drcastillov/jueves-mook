<?php

require_once 'Mage/Checkout/controllers/CartController.php';
class Mook_Productos_Checkout_CartController extends Mage_Checkout_CartController
{
    # Overloaded indexAction
    public function indexAction()
    {


        parent::indexAction();

    }
    public function testAction()
    {
        echo 123;
    }
}