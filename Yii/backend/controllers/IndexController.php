<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * @inheritdoc
     */
 		public function actionIndex()
 		{
 			return 	$this->render('index');
 		}

 		public function actionInbox()
 		{
 			return 	$this->render('inbox');
 		}

 		public function actionCalendar()
 		{
 			return 	$this->render('calendar');
 		}


}
