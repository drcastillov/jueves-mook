<?php

class Mook_Rene_Model_Mysql4_Rene extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('rene/rene', 'rene_id');
    }
}