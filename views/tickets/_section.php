<?php
use yii\helpers\Html;

define('WIDGET_URL', 'https://zapashny.ticketsteam.ru/widget');
$onclick = "ticketsteam.runSector(" . "'" . $widget . "', '" . 
    WIDGET_URL . "', '" . $model['id'] . "');return false;";
?>
<tr>
    <td><?= Html::a($model['name'], '#', ['onclick' => $onclick ])?></td>
  <td><?=$model['min_price'] . ' - ' . $model['max_price']?></td>
</tr>
    



