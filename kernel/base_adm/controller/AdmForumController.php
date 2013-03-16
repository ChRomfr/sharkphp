<?php

abstract class AdmForumController extends Controller{

	public function indexAction(){

		$this->load_manager('forum','base_app');

		#  	Recuperation des alertes non traite
		$Alertes = $this->manager->forum->getLastAlerteNonTraite();
		
		#  	Recuperation des dernieres actions de moderation
		$Logs = $this->manager->forum->getLastLogModeration();

		# 	Affichage des categore/index
		
		$this->app->smarty->assign(array(
			'Logs'				=>	$Logs,
			'Alertes'			=>	$Alertes,
			'ForumsData'		=>	$this->manager->forum->getCategorieAndForumForIndex(),
		));

		return $this->app->smarty->fetch(ROOT_PATH . 'kernel' . DS . 'base_adm' . DS . 'view' . DS . 'forum' . DS . 'index.tpl');
	}

	public function traitealerteAction($alerte_id){

		$Alerte = new Basemessagealerte();
		$Alerte->get($alerte_id);
		$Alerte->traite = 1;
		$Alerte->save();

		$Log = new Baselogmoderation();
		$Log->date_action = TimeToDATETIME();
		$Log->moderateur_id = $_SESSION['utilisateur']['id'];
		$Log->action = "Traitement de l'alerte #". $Alerte->id;
		$Log->save();

		$this->app->smarty->assign('FlashMessage','Alerte traitée');

		return $this->indexAction();
	}

	public function categorieIndex(){}
	public function categorieAdd(){}
	public function categorieEdit(){}
	public function categorieDelete(){}

	public function forumIndex(){}
	public function forumAdd(){}
	public function forumEdit(){}
	public function forumDelete(){}
}