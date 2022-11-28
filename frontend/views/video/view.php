<?php
/** @var $model \common\models\Video */

use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9 mr-3"
            style="width: 150px;">
            <video class="embed-responsive-item"
                poster="<?php echo $model->getThumbnailLink() ?>"                
                src="<?php echo $model->getVideoLink() ?>"
                controls></video>
        </div>
        <h6 class="mt-2"><?php echo $model->title ?></h6>
        <div class="d-flex">
            <?php echo $model->getViews()->count() ?> views <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
        </div>
        <div>
            <?php Pjax::begin() ?>
                <?php echo $this->render('_buttons',[
                    'model'=>$model
                ]) ?>
            <?php Pjax::end() ?>
        </div>
    </div>
    <div>
        <p>
            <?php echo Html::a($model->createdBy->username,[
                '/channel/view','username' => $model->createdBy->username
            ]) ?>
        </p>
        <?php echo Html::encode($model->description) ?>
    </div>
    <div class="col-sm-4">

    </div>
</div>