<?php
/** @var $model \common\models\Video*/

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="card m-3" style="width: 14rem;">
    <a href="<?php echo Url::to(['/video/view','video_id'=>$model->video_id])?>">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                    poster="<?php echo $model->getThumbnailLink() ?>"
                    src="<?php echo $model->getVideoLink() ?>"></iframe>
        </div>
    </a>
    <div class="card-bod p-2">
        <h5 class="card-title m-0"><?php echo $model->title ?></h5>
        <p class="text-muted card-text m-0">
        <?php echo Html::a($model->createdBy->username,[
                '/channel/view','username' => $model->createdBy->username
            ]) ?>
        </p>
        <p class="text-muted card-text m-0">
        <?php echo $model->getViews()->count() ?> views . 
            <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>
