<?php
/* @var $this yii\web\View */

use yii\widgets\ListView;

echo "<pre>";
print_r($eventsDataProvider);
echo "</pre>";

?>
<div class="row">
  <?= ListView::widget([
    'dataProvider' => $eventsDataProvider,
    'itemView' => '_event'
  ]);
  ?>
</div>



