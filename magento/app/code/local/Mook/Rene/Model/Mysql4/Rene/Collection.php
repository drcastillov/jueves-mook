<?php


class Mook_Rene_Model_Mysql4_Rene_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__consttruct();
        $this->_init('rene/rene');
    }
}