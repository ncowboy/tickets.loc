<?php

namespace app\controllers;

use Yii;
class TicketsController extends \yii\web\Controller
{
   public function actionIndex()
    { 
      $venues = $this->getConnection()->request('venue.list'); 
      return $this->render('index', [
        'venues' => $venues
      ]);
    }
    
    
    
    
    protected function getConnection(){
      return Yii::createObject( require '../config/api.php');
    }

}
