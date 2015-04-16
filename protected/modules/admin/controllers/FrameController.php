<?php
class FrameController extends Controller {
	
	// Def the layout location, //layouts/main is the outside location.
	public $layout = 'application.modules.admin.views.layouts.main';
	
	/**
	 * index
	 */
	public function actionIndex() {
		if (Yii::app ()->user->isGuest) {
			$this->forward ( "login" );
		}
		$this->render ( "index" );
	}
	
	/**
	 * login
	 */
	public function actionLogin() {
		$this->layout = false;
		if (! Yii::app ()->user->isGuest) {
			$this->redirect ( "index" );
		}
		
		$model = new LoginForm ();
		
		if (isset ( $_POST ["LoginForm"] )) {
			$model->attributes = $_POST ["LoginForm"];
			
			if ($model->validate () && $model->login ()) {
				$this->redirect ( Yii::app ()->user->returnUrl );
			}
		}
		
		$this->render ( "login" );
	}
	
	/**
	 * logout
	 */
	public function actionLogout() {
		Yii::app ()->user->logout ();
		$this->redirect ( Yii::app ()->homeUrl );
	}
}