<?php

class GoSquared_LiveStats_Model_Mysql4_LiveStats extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the livestats_id refers to the key field in your database table.
        $this->_init('livestats/livestats', 'livestats_id');
    }
}