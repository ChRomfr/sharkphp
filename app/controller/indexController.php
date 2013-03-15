<?php

class indexController extends Controller{

	public function indexAction() {

		$this->load_manager('news','base_app');
		$this->load_manager('download','base_app');
		$this->load_manager('article','base_app');

		$this->app->smarty->assign(array(
			'News'		=>	$this->manager->news->getLast(5),
			'Downloads'	=>	$this->manager->download->getLast(5),
			'Articles'	=>	$this->manager->article->getLast(5),
		));

       	return $this->app->smarty->fetch( VIEW_PATH . 'index' . DS . 'index.tpl' );
    }
}