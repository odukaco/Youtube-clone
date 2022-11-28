<?php use yii\helpers\Url; 
/**@var $model \common\models\Video */
?>
            
<a href="<?php echo Url::to(['/video/like', 'video_id'=> $model->video_id]) ?>" 
    class="btn btn-sm <?php echo $model->isLikedBy(Yii::$app->user->id) ? 
    'btn-outline-primary' :'btn-outline-secondary' ?>" data-method="post" data-pjax="1">
    <i class="fas fa-thumbs-up"></i><?php echo $model->getLikes()->count() ?>
</a>
<a href="<?php echo Url::to(['/video/dislike', 'video_id'=> $model->video_id]) ?>" 
    class="btn btn-sm <?php echo $model->isDislikedBy(Yii::$app->user->id) ? 
    'btn-outline-primary' :'btn-outline-secondary' ?>" data-method="post" data-pjax="1">
    <i class="fas fa-thumbs-down"></i><?php echo $model->getDislikes()->count() ?>
</a>