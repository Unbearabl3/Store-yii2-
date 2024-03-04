<?php


use yii\bootstrap5\Html;



if(Yii::$app->language == 'ru') {
    echo Html::a('Go to English', array_merge(Yii::$app->request->get(),
        [Yii::$app->controller->route, 'language' => 'en']
    ));
} else if(Yii::$app->language == 'en') {
    echo Html::a('Перейти на русский', array_merge(Yii::$app->request->get(),
        [Yii::$app->controller->route, 'language' => 'ru']
    ));
}