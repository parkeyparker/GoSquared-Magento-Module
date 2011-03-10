<?php

class GoSquared_LiveStats_Block_Adminhtml_LiveStats_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('livestats_form', array('legend'=>Mage::helper('livestats')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('livestats')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('livestats')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('livestats')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('livestats')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('livestats')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('livestats')->__('Content'),
          'title'     => Mage::helper('livestats')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getLiveStatsData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getLiveStatsData());
          Mage::getSingleton('adminhtml/session')->setLiveStatsData(null);
      } elseif ( Mage::registry('livestats_data') ) {
          $form->setValues(Mage::registry('livestats_data')->getData());
      }
      return parent::_prepareForm();
  }
}