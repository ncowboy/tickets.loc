<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

/**
 * Description of ApiConnection
 *
 * @author i.borisov
 */


class ApiComponent extends \yii\base\Component{
  
    /**
     * @var url for tickets website.
     */ 
    public $url;
    /**
     * @var string the username for establishing api connection.
     */
    public $login;
    /**
     * @var string the password for establishing api connection.
     */
    public $password;
    
    public function request($inputParams) {
      $time = time();
      $params['auth'] = $this->login . ':' . sha1(md5($this->password) . $time) . ':' . $time;
      $params['action'] = $inputParams; 
      
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $this->url);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      $rs = curl_exec($ch);
      curl_close($ch);
      
      $json = json_decode($rs, true);
      if (json_last_error() == JSON_ERROR_NONE) {
          return($json);
      } else {
          echo 'Ошибка запроса';
          echo "<pre>";
          var_dump($this->login);
          echo "</pre>";
      }
    }
   
}
