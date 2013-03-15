<?php
if( !defined('IN_ADMIN') ) exit;
if( !defined('IN_VA') ) exit;

class indexController extends Controller{

	public function indexAction(){	
	
		$this->registry->smarty->assign(array(
			'ctitre'			=>	$this->lang['Administration'],
			'Logs'				=>	/*$this->app->MyLog->getLastLog(10)*/null,
			'NbContacts'		=>	$this->app->db->count(PREFIX . 'contact', array('lu =' => 0)),
			'NbUsers'			=>	$this->app->db->count(PREFIX . 'user', array('actif =' => 0)),
			'NbSites'			=>	$this->app->db->count(PREFIX . 'annuaire_site'),
			'NbSitesNew'		=>	$this->app->db->count(PREFIX . 'annuaire_site', array('status =' => 'new')),
		));
		
		return $this->registry->smarty->fetch(VIEW_PATH . 'index' . DS . 'index.tpl');
	}	
    
    public function ajaxGetNotReadContact(){
        $Contacts = $this->app->db->get(PREFIX . 'contact', array('lu =' => 0) );
        $this->app->smarty->assign(array(
            'Contacts'      =>  $Contacts,
        ));
        return $this->app->smarty->fetch( VIEW_PATH . 'index' . DS . 'ajax_contact_not_read.tpl');
    } 
    
}