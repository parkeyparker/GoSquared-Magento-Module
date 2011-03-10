<?php

class GoSquared_LiveStats_Block_Adminhtml_LiveStats_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('livestats_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('livestats')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('livestats')->__('Item Information'),
          'title'     => Mage::helper('livestats')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('livestats/adminhtml_livestats_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}