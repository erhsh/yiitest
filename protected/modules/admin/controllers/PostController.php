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
		if (Yii::app ()->user->isGuest) {
			$this->forward ( "/admin/frame/login" );
		}
		
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
		if (Yii::app ()->user->isGuest) {
			$this->forward ( "/admin/frame/login" );
		}
		
		$model = new PostModel ();
		if (isset ( $_POST ['Post'] )) {
			$post = $_POST ['Post'];
			$now = time ();
			$post ['update_time'] = $now;
			$post ['update_time'] = $now;
			if ($model->insertPost ( $post ))
				$this->redirect ( "list" );
		}
		
		$model = new TypeModel ();
		$types = $model->getAllType ();
		$this->render ( "add", array (
				"types" => $types 
		) );
	}
	public function actionDel() {
		$model = new PostModel ();
		if (isset ( $_GET ['id'] )) {
			$model->deletePost ( $_GET ['id'] );
		}
		$this->redirect ( "list" );
	}
	
	/**
	 * Displays a particular model.
	 *
	 * @param integer $id
	 *        	the ID of the model to be displayed
	 */
	public function actionView($id) {
		$model = new PostModel ();
		
		$posts = $model->getPost ( $id );
		
		$this->render ( 'view', array (
				'Post' => $posts [0] 
		) );
	}
}