<?php
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options'=> ['class'=>'shadow']
    ]);
    $menuItems = [
        ['label' => 'Create', 'url' => ['/video/create']],
    ];
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        $menuItems[] =[
            'label'=> 'Logout('.Yii::$app->user->identity->username.')',
            'url'=>['/site/logout'],
            'linkOptions' => [
                'data-method'=>'post'
            ]
        ];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav '],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>