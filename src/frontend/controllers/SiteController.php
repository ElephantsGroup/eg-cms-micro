<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use elephantsGroup\base\EGController;

/**
 * Site controller
 */
class SiteController extends EGController
{
    public function actionIndex()
    {
		var_dump('Hello World');
    }
}