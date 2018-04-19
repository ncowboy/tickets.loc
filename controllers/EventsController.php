<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;
use yii\data\Sort;

use Yii;
class EventsController extends \yii\web\Controller
{
   public function actionIndex()
    { 
      $events = $this->getConnection()->request(['action' => 'event.list']);
      $eventsDataProvider = new ArrayDataProvider([
        'allModels' => $events['result'],
        'sort' => new Sort([
          'attributes' => ['date']
        ])
      ]);
      return $this->render('index', [
        'eventsDataProvider' => $eventsDataProvider,
      ]);
    }
    
    protected function getConnection(){
      return Yii::createObject( require '../config/api.php');
    }
}
