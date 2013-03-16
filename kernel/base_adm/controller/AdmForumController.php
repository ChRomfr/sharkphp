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
	
	public function forumaddAction($categorie_id){

		if( $this->app->HTTPRequest->postExists('forum') ):
			$Forum = new myObject($this->app->HTTPRequest->postData('forum') );
			$Forum->add_by = $_SESSION['utilisateur']['id'];
			$Forum->add_on = TimeToDATETIME();
			$Forum->categorie_id = $categorie_id;

			$Forum->image = $this->savePhoto('image');

			if( $Forum->image == false):
				$Forum->image = '';
			endif;

			$this->app->db->insert(PREFIX . 'forum', $Forum);

			return $this->redirect( getLinkAdm('forum'), 3, $this->lang['Forum_ajoute'] );
		endif;

		return $this->app->smarty->fetch(ROOT_PATH . 'kernel' . DS . 'base_adm' . DS . 'view' . DS . 'forum' . DS . 'forumadd.tpl');
	}

	public function forumEdit(){}
	public function forumDelete(){}

	/**
	 * Enregistrement l image sur le serveur
	 * @param  string nom de la var $_FILE qui contient l image
	 * @return string|bool le nom de l image ou false si l enregistrement a echoue
	 */
	private function savePhoto($file){
		$Dir = ROOT_PATH . 'web' . DS . 'upload' . DS . 'categorie' . DS;
		require_once ROOT_PATH . 'kernel' . DS . 'lib' . DS . 'upload' . DS . 'class.upload.php';
		
		if( !is_dir(ROOT_PATH . 'web' . DS . 'upload' . DS . 'categorie' . DS) ):
			@mkdir(ROOT_PATH . 'web' . DS . 'upload' . DS . 'categorie' . DS);
		endif;

		if( !is_dir($Dir) ):
			@mkdir($Dir);
		endif;
		
		$Fichier = new Upload($_FILES[''.$file.'']);

		if($Fichier->uploaded):
			$Fichier->allowed = 'image/*';
            $Fichier->file_overwrite = true;
            $Fichier->file_new_name_body  = microtime(true);
			$Fichier->image_resize          = true;
			$Fichier->image_ratio_y         = true;
			$Fichier->image_x               = 250;
            $Fichier->process($Dir);

            if( $Fichier->processed ):
            	return $Fichier->file_dst_name;
            else:
            	return false;
            endif;
		endif;

		return false;
	}
}