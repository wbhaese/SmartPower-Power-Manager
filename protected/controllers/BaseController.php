<?php
// include_once 'localhost/smart/protected/views/base/salasNew.php';

class BaseController extends Controller
{
	public function actionValidar()
	{
		$id = 'email';
		$teste = \Usuarios::search();
		echo $teste;
	}

	public function actionIndex()
	{
		//renderiza tela de login
		$this->renderPartial('login');
	}

	public function actionCadastrar()
	{
		//renderiza tela de login
		$this->renderPartial('cadastrar');
	}

	public function actionSalas()
	{
		// renderiza tela de gerenciamento
		$this->renderPartial('salasNew');
		// $this->render('2');

	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}