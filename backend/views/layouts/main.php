<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
//use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="wrap h-100 d-flex flex-column h-100">
<?php echo $this->render('_header') ?>
</header>

<div class="wrap h-100 d-flex flex-column h-100">
    <main class="d-flex">
    <?php echo $this->render('_sidebar') ?>
        <div class="content-wrapper p-3">
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </main>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
