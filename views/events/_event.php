<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="event col-md-3">
  <div class="img-responsive">
    <img src="https://tickets.greatcircus.ru/widget<?=$model['image_list']?>">  
  </div>
    
    <div><?=$model['name']?></div>
    <div><?=$model['venue']?></div>
    <div><?= date('j F в H:i D', strtotime($model['date'])) ?></div>
    <div><?=$model['min_price'] . ' - ' . $model['max_price'] . ' &#8381' ?></div>
    <?= Html::a('Купить', Url::to(['/tickets', 'event_id' => $model['id']]), [
      'class' => 'btn btn-success' 
    ])?>
  
</div>
