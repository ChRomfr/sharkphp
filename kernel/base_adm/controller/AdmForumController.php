<?php

abstract class AdmForumController extends Controller{

	public function indexAction(){

		$this->load_manager('forum','base_app');

		#  	Recuperation des alertes non traite
		$Alertes = $this->manager->forum->getLastAlerteNonTraite();

		var_dump($Alertes);
		
		#  	Recuperation des dernieres actions de moderation

		# 	Affichage des categore/index
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