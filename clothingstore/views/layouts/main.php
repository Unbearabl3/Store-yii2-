<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => Yii::t('common', 'Главная'), 'url' => ['/site/index']],
            ['label' => Yii::t('common', 'Каталог'), 'url' => ['/site/about']],
            ['label' => Yii::t('common', 'Корзина'), 'url' => ['/site/contact']],
            ['label' => Yii::t('common', 'Круд'), 'url' => ['/user']],

            // ['label' => 'Авторизация', 'url' => ['/site/egistration']],
            Yii::$app->user->isGuest
                ? ['label' => 'Авторизация', 'url' => ['/site/registration']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);

    NavBar::end();

    ?>

</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 footer">
    <div class="container">
        <a href="https://github.com/Unbearabl3" target="_blank"><?= Yii::t('common', 'Мой гитхаб') ?></a>
        <a href="https://github.com/Unbearabl3" target="_blank"><?= Yii::t('common', 'Мой линкедин') ?></a>
        <a href="https://leetcode.com/Unbearabl3" target="_blank"><?= Yii::t('common', 'Мой литкод') ?></a>
        <?= $this->render('language') ?>
    </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
