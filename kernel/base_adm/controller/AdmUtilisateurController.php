<?php

abstract class AdmUtilisateurController extends Controller{

	/**
	 * Affiche la liste des utilisateurs
	 * @return [type] [description]
	 */
	public function indexAction(){

		$this->load_manager('utilisateur','admin');

		$Utilisateurs = $this->manager->utilisateur->getAll();

		$this->app->smarty->assign('Utilisateurs', $Utilisateurs);

		# Generation de la page
		if( is_file( VIEW_PATH . 'utilisateur' . DS . 'index.tpl' ) ) :
			$tpl_file = VIEW_PATH . 'utilisateur' . DS . 'index.tpl';
		else:
			$tpl_file = ROOT_PATH . 'kernel' . DS . 'base_adm' . DS  . 'view' . DS . 'utilisateur' . DS . 'index.tpl';
		endif;

		return $this->app->smarty->fetch($tpl_file);

	}

	/**
	 * Affiche le formulaire d ajout et le traite
	 */
	public function addAction(){
		global $config;
      
        if( $this->app->HTTPRequest->postExists('user') ){
        	$this->load_model('utilisateur','admin');

        	// Traitement du formulaire
			$user = new utilisateur($this->app->HTTPRequest->postData('user') );
			
			if( $Result = $user->isValid() !== true ):
				$this->app->smarty->assign('Error_register', $Result);			
				goto print_form;
			endif;
				
			if( $Reslt = $user->validPassword($_POST['user']['password2']) !== true ){
				$this->app->smarty->assign('Error_register', $Result);			
				goto print_form;
			}	
			
			if( $this->app->config['user_id'] == 'uniq' ):
				$user->id = getUniqueID();
			endif;

			# On crypte le mot de passe 
			$user->cryptPassword();

			# On le sauvegarde dans la base
			$user->save();	
            
			return $this->redirect(getLinkAdm('utilisateur/edit/' . $user->id), 3, $this->lang['Compte_cree']);
		}
        
        print_form:
        $this->getFormValidatorJs();

        # Generation de la page
		if( is_file( VIEW_PATH . 'utilisateur' . DS . 'add.tpl' ) ) :
			$tpl_file = VIEW_PATH . 'utilisateur' . DS . 'add.tpl';
		else:
			$tpl_file = ROOT_PATH . 'kernel' . DS . 'base_adm' . DS  . 'view' . DS . 'utilisateur' . DS . 'add.tpl';
		endif;

		return $this->app->smarty->fetch($tpl_file);
    }

    /**
     * Affiche et traite le formualire d edition
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function editAction($id){
		$this->load_model('utilisateur','admin');
				
		if( $this->app->HTTPRequest->postExists('user') ){

			$user = new myObject($this->app->HTTPRequest->postData('user'));

			$this->app->db->update(PREFIX . 'user', $user);

			return $this->redirect(getLinkAdm('utilisateur'),3,$this->lang['Utilisateur_modifie']);
		}
		
		$user = new utilisateur();
		$user->get($id);

		$groupe = new Basegroupe();
		$groupes = $groupe->get();

		# On boucle sur les groupe pour supprime les groupes ou il est
		$i=0;
		foreach($groupes as $row):
			if( isset($user->groupes[$row['name']]) ):
				unset($groupes[$i]);
			endif;
			$i++;
		endforeach;

		if( empty($user->identifiant) ):
			return $this->redirect( getLinkAdm('utilisateur'),3, 'Utilisateur non trouve' );
		endif;

		$this->app->smarty->assign(array(
			'user'		=>	$user,
			'groupes'	=>	$groupes,
		));
		
		$this->getFormValidatorJs();
		$this->app->load_web_lib('chosen/chosen.css','css');
		$this->app->load_web_lib('chosen/chosen.jquery.min.js','js');

        # Generation de la page
		if( is_file( VIEW_PATH . 'utilisateur' . DS . 'edit.tpl' ) ) :
			$tpl_file = VIEW_PATH . 'utilisateur' . DS . 'edit.tpl';
		else:
			$tpl_file = ROOT_PATH . 'kernel' . DS . 'base_adm' . DS  . 'view' . DS . 'utilisateur' . DS . 'edit.tpl';
		endif;

		return $this->app->smarty->fetch($tpl_file);
	}

	/**
	 * Supprime un utilisateur de la base
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function deleteAction($id){
		$this->load_manager('utilisateur','admin');
		$this->manager->utilisateur->delete($id);
		return $this->redirect(getLinkAdm('utilisateur'),3,$this->lang['Utilisateur_supprime']);
	}

	public function groupeAction(){}

	public function groupeaddAction(){}

	public function groupeeditAction(){}

	public function groupedeleteAction(){}

	/**
	 * [useraddingroupeAction description]
	 * @param  int $id id de l utilisateur
	 * @return [type]     [description]
	 */
	public function useraddingroupeAction($id){

		$groupe = $this->app->HTTPRequest->postData('groupe');
		$groupe['user_id'] = $id;

		# On verifie si l utilisateur est de dans le groupe
		if( $this->app->db->count(PREFIX . 'user_groupe', array('user_id =' => $id, 'groupe_id =' => $groupe['groupe_id'])) == 1):
			$this->app->smarty->assign('FlashMessage','Utilisateur deja dans ce groupe');
			return $this->editAction($id);
		endif;

		# On enregistre
		$this->app->db->insert(PREFIX . 'user_groupe', $groupe);

		# Si groupe 4 (administrateur) on passe l utilisateur au niveau 1
		if( $groupe['groupe_id'] == 4):
			$user = array('id' => $id, 'isAdmin' => 1);
			$this->app->db->update(PREFIX . 'user', $user);
		endif;

		# On enregistre et notifie l utilisateur
		$this->app->smarty->assign('FlashMessage','Utilisateur ajoute au groupe');
		return $this->editAction($id);

	}

	/**
	 * Retire un utilisateur d un groupe
	 * @param  [type] $id id utilisateur
	 * @return [type]     [description]
	 */
	public function userremovegroupeAction($id){
		$groupe = $this->app->HTTPRequest->postData('groupe'); 

		# on supprime l enregistrement
		$this->app->db->delete(PREFIX . 'user_groupe', null, array('user_id =' => $id, 'groupe_id =' => $groupe['groupe_id']));

		if( $groupe['groupe_id'] == 4):
			$user = array('id' => $id, 'isAdmin' => 0);
			$this->app->db->update(PREFIX . 'user', $user);
		endif;

		# On enregistre et notifie l utilisateur
		$this->app->smarty->assign('FlashMessage','Utilisateur retire au groupe');
		return $this->editAction($id);
	}

}