<?php
class GoSquared_LiveStats_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/livestats?id=15 
    	 *  or
    	 * http://site.com/livestats/id/15 	
    	 */
    	/* 
		$livestats_id = $this->getRequest()->getParam('id');

  		if($livestats_id != null && $livestats_id != '')	{
			$livestats = Mage::getModel('livestats/livestats')->load($livestats_id)->getData();
		} else {
			$livestats = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($livestats == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$livestatsTable = $resource->getTableName('livestats');
			
			$select = $read->select()
			   ->from($livestatsTable,array('livestats_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$livestats = $read->fetchRow($select);
		}
		Mage::register('livestats', $livestats);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}