<?php
class Mook_Jueves_Model_Mysql4_Jueves extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("jueves/jueves", "id");
    }
}