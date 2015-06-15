<?php

class Mook_Rene_Model_Rene extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('rene/rene');
    }
}