<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<div class="site-contact">

    <h3>Корзина</h3>
    <div class="basketBlock">
        <div class="basket_item"></div>
    </div>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                     

    <?php endif; ?>
</div>
