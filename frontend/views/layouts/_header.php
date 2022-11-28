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
        $menuItems[]=['label'=>'Signup','url'=>['/site/signup']];
        $menuItems[]=['label'=>'login','url'=>['/site/login']];
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