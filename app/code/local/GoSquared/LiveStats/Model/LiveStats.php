<?php

class GoSquared_LiveStats_Model_LiveStats extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('livestats/livestats');
    }
}