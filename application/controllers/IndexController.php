<?php

class IndexController extends Zend_Controller_Action
{
	public function preDispatch()
	{
		/* preDispatch */
	}
	
	public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->testMessage = 'Index-Controller, Index-Action';
        // action body
        
    	$this->view->message = 'Hallo World!';
    	
    
    }


}
