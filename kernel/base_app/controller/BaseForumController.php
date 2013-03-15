<?php

abstract class Baseforumcontroller extends Controller{

	public function indexAction(){

		$this->load_manager('forum', 'base_app');

		$ForumsData = $this->manager->forum->getCategorieAndForumForIndex();

		$this->app->smarty->assign(array(
			'ctitre'		=>	'Forum',
			'ForumsData'	=>	$ForumsData,
		));

		return $this->app->smarty->fetch(BASE_APP_PATH . 'view' . DS . 'forum' . DS . 'index.tpl');
	}

	public function viewforumAction($forum_id){

		$this->load_manager('forum', 'base_app');

		$Threads = $this->manager->forum->getThreadByForumId($forum_id);
		$Forum = $this->manager->forum->getForum($forum_id);

		$this->app->smarty->assign(array(
			'ctitre'		=>	'Forum :: ',
			'Threads'		=>	$Threads,
			'Forum'			=>	$Forum,
		));

		return $this->app->smarty->fetch(BASE_APP_PATH . 'view' . DS . 'forum' . DS . 'viewforum.tpl');
	}

	public function newthreadAction($forum_id){

		$this->load_manager('forum', 'base_app');

		if( $this->app->HTTPRequest->postExists('thread') ):

			$Thread = new Basethread($this->app->HTTPRequest->postData('thread') );
			$Message = new Basemessage($this->app->HTTPRequest->postData('message'));

			# On valide les donnees deja presentes
			if( empty($Thread->titre) ):
				$this->app->smarty->assign('Error','Sujet obligatoire');
				goto printform;
			endif;

			if( empty($Message->message) ):
				$this->app->smarty->assign('Error','Message obligatoire');
				goto printform;
			endif;

			# On complete les donnees du sujet
			$Thread->forum_id = $forum_id;
			$Thread->auteur_id = $_SESSION['utilisateur']['id'];
			$Thread->prepareForSave();
			$Thread->id = $Thread->save();

			# On traite le message
			$Message->message = htmlentities($Message->message);
			$Message->forum_id = $forum_id;
			$Message->thread_id = $Thread->id;
			$Message->prepareForSave();
			$Message->save();

			# Redirection de l utilisateur
			return $this->redirect( getLink('forum/viewtopic/'. $Thread->id),3, 'Sujet ajouté' );

		endif;

		printform:
		$this->getFormValidatorJs();

		$this->app->load_web_lib('markitup/skins/simple/style.css','css');
		$this->app->load_web_lib('markitup/bbcode/style.css','css');
		$this->app->load_web_lib('markitup/jquery.markitup.js','js');
		$this->app->load_web_lib('markitup/bbcode/set.js','js');

		$Forum = $this->manager->forum->getForum($forum_id);

		$this->app->smarty->assign(array(
			'ctitre'		=>	'Forum :: :: Nouveau sujet',
			'Forum'			=>	$Forum,
		));

		return $this->app->smarty->fetch(BASE_APP_PATH . 'view' . DS . 'forum' . DS . 'newthread.tpl');
	}

	public function viewtopicAction($thread_id){

		# Init du nombre de message par page
		$per_page = 20;

		# Chargement du manager
		$this->load_manager('forum', 'base_app');

		# On commpte le nombre de message
		$NbMessage = $this->app->db->count(PREFIX . 'forum_message', array('thread_id =' => $thread_id));

		# On recupere les messages
		$Messages = $this->manager->forum->getMessagesByThreadId($thread_id, $per_page, getOffset($per_page));

		# Recuperation infos topic
		$Thread = new Basethread($this->app->db->get_one(PREFIX . 'forum_thread', array('id =' => $thread_id)));

		$Thread->save();

		# On traite la pagination
		$Pagination = new Zebra_Pagination();
		$Pagination->records($NbMessage);
		$Pagination->records_per_page($per_page);
		
		# Envoie a smarty
		$this->app->smarty->assign(array(
			'ctitre'		=>	'',
			'Messages'		=>	$Messages,
			'Thread'		=>	$Thread,
			'Pagination'	=>	$Pagination,
			'Forum'			=>	new myObject( $this->app->db->get_one(PREFIX . 'forum', array('id =' => $Thread->forum_id)) )
		));

		if( $_SESSION['utilisateur']['id'] != 'Visiteur' ):
			$this->getFormValidatorJs();

			$this->app->load_web_lib('markitup/skins/simple/style.css','css');
			$this->app->load_web_lib('markitup/bbcode/style.css','css');
			$this->app->load_web_lib('markitup/jquery.markitup.js','js');
			$this->app->load_web_lib('markitup/bbcode/set.js','js');
		endif;
		
		# Generation de la page
		return $this->app->smarty->fetch(BASE_APP_PATH . 'view' . DS . 'forum' . DS . 'viewtopic.tpl');

	}

	public function addReplyAction($thread_id){

		$per_page = 20;

		if( $this->app->HTTPRequest->postExists('reply') ):

			$Thread = new Basethread($this->app->db->get_one(PREFIX . 'forum_thread', array('id =' => $thread_id)));

			if( empty($Thread) ):
				return $this->redirect( getLink('forum'), 3, 'Le sujet n\'existe pas ou plus !' );
			endif;

			if( $Thread->closed == 1 ):
				return $this->redirect( getLink('forum/viewtopic/'. $thread_id), 3, 'Ce sujet est fermé !' );
			endif;

			$Message = new Basemessage($this->app->HTTPRequest->postData('reply')); 

			if( empty($Message->message) ):
				return $this->redirect( getLink('forum/viewtopic/'. $thread_id), 3, 'Votre réponse est vide !' );
			endif;

			# On traite le message
			$Message->message = htmlentities($Message->message);
			$Message->forum_id = $Thread->forum_id;
			$Message->thread_id = $thread_id;
			$Message->prepareForSave();
			$Message->id = $Message->save();

			# On met a jour le thread
			$Thread->last_auteur_id = $_SESSION['utilisateur']['id'];
			$Thread->last_message_date = TimeToDATETIME();
			$Thread->save();
			
			# On calcul la page de redirection
			$page = floor($this->app->db->count(PREFIX . 'forum_message', array('thread_id =' => $thread_id)) / $per_page) + 1;
			# On redirige l utilisateur
			return $this->redirect( getLink('forum/viewtopic/'. $thread_id.'?page='.$page.'#message-'. $Message->id), 3, 'Réponse enregistrée' );

		endif;

		return $this->redirect( $_SERVER['HTTP_REFERER'],0,'');
	}

	public function editReply($message_id){

	}

	public function deleteReply($message_id){

	}

	public function deleteThread($thread_id){

	}

	public function moveThread($thread_id){

	}

	/**
	 * [locksujetAction description]
	 * @param  [type] $thread_id [description]
	 * @return [type]            [description]
	 */
	public function locksujetAction($thread_id){

		# Verification des droits
		if( $this->isModerateur() == false ):
			return $this->indexAction();
		endif;

		$Thread = new Basethread();
		$Thread->id = $thread_id;
		$Thread->closed = 1;
		$Thread->save();

		return $this->redirect( getLink('forum/viewtopic/'. $Thread->id), 3, 'Sujet verouillé' );
	}	

	public function unlocksujetAction($thread_id){

		# Verification des droits
		if( $this->isModerateur() == false ):
			return $this->indexAction();
		endif;

		$Thread = new Basethread();
		$Thread->id = $thread_id;
		$Thread->closed = 0;
		$Thread->save();

		return $this->redirect( getLink('forum/viewtopic/'. $Thread->id), 3, 'Sujet déverouillé' );
	}


	private function isModerateur(){
		if( $_SESSION['utilisateur']['isAdmin'] > 0 ):
			return true;
		endif;

		if( isset($_SESSION['utilisateur']['groupes']['moderateurs']) ):
			return true;
		endif;

		if( isset($_SESSION['utilisateur']['groupes']['administrateurs']) ):
			return true;
		endif;

		return false;
	}

}