<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;

use Yii;
class TicketsController extends \yii\web\Controller
{
  public function actionIndex($event_id)
    { 
      $event = $this->getConnection()->request([
        'action' => 'event.detail',
        'event_id' => $event_id
      ]);
      
      $sections = $this->getConnection()->request([
        'action' => 'event.sector.list',
        'event_id' => $event_id
      ]);
      $sectionsDataProvider = new ArrayDataProvider([
          'allModels' => $sections['result'],
          ]);
      
      return $this->render('index', [
        'event' => $event['result'],
        'sectionsDataProvider' => $sectionsDataProvider
      ]);
    }
    
    public function actionTicketsList($event_id, $section_id){
      $ticketsList = $this->getConnection()->request([
        'action' => 'ticket.list',
        'event_id' => $event_id,
        'sector_id' => $section_id
      ]);
      
      $sectionMap = $this->getConnection()->request([
        'action' => 'sector.map',
        'sector_id' => $section_id
      ]);
      return $this->render('tickets-list', [
        'ticketsList' => $ticketsList['result'],
        'sectionMap' => $sectionMap['result']
      ]);
    } 
    protected function getConnection(){
      return Yii::createObject( require '../config/api.php');
    }
    
   
}
