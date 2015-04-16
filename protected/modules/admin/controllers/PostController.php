<?php

/**
 * Controll the post.
 * @author j
 *
 */
class PostController extends Controller {
	public $layout = "application.modules.admin.views.layouts.main";
	
	/**
	 * list
	 */
	public function actionList() {
		$postModel = new PostModel ();
		
		$posts = $postModel->getPostList ();
		$this->render ( "list", array (
				"posts" => $posts 
		) );
	}
	
	/**
	 * add
	 */
	public function actionAdd() {
		$this->render ( "add" );
	}
}