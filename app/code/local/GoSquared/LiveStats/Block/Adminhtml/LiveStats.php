<?php
class GoSquared_LiveStats_Block_Adminhtml_LiveStats extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_livestats';
    $this->_blockGroup = 'livestats';
    $this->_headerText = Mage::helper('livestats')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('livestats')->__('Add Item');
    parent::__construct();
  }
}