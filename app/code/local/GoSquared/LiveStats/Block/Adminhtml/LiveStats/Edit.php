<?php

class GoSquared_LiveStats_Block_Adminhtml_LiveStats_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'livestats';
        $this->_controller = 'adminhtml_livestats';
        
        $this->_updateButton('save', 'label', Mage::helper('livestats')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('livestats')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('livestats_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'livestats_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'livestats_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('livestats_data') && Mage::registry('livestats_data')->getId() ) {
            return Mage::helper('livestats')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('livestats_data')->getTitle()));
        } else {
            return Mage::helper('livestats')->__('Add Item');
        }
    }
}