<?php

/** @var $channel \common\models\User */
/** @var $this \yii\web\View */
use yii\widgets\Pjax;

?>

<div class="jumbotron">
    <h1 class="display-4"><?php echo $channel->username ?></h1>
    <hr class="my-4" >
    <?php Pjax::begin()?>
        <?php echo $this->render('_subscribe',[
            'channel' => $channel
        ]) ?>
    <?php Pjax::end()?>
</div>

<?php

/** @var $dataProvider \yii\data\ActiveDataProvider */

echo \yii\widgets\ListView::widget([
    'dataProvider'=>$dataProvider,
    'itemView'=>'@frontend/views/video/_video_item.php',
    'layout'=>'<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag'=>false
    ]
])
?>