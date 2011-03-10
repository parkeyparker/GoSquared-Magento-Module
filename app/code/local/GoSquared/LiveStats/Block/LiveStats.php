<?php
class GoSquared_LiveStats_Block_LiveStats extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getLiveStats()     
     { 
        if (!$this->hasData('livestats')) {
            $this->setData('livestats', Mage::registry('livestats'));
        }
        return $this->getData('livestats');
        
    }
}