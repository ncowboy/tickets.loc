<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<pre>";
//print_r($sectionMap);
echo "</pre>";

foreach ($sectionMap as $place){
  echo '<div style="position: absolute; border: 1px solid black; width: 16px; height: 16px; top:' . $place['y'] . 'px; left:' . $place['x'] . 'px"></div>';
  }

