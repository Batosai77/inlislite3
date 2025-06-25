<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Favicons -->
    <link rel="shortcut icon" type='image/x-icon' href="/../favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts for better typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php $this->head() ?>

    <style>
        /* Applying the Inter font and setting a smooth color transition */
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #fff;
            color: #212529;
        }

        /* Custom styling for the logo to control its size responsively */
        .portal-logo {
            width: 80%;
        }

        @media (min-width: 576px) {

            /* sm */
            .portal-logo {
                width: 50%;
            }
        }

        @media (min-width: 768px) {

            /* md */
            .portal-logo {
                width: 33.33%;
            }
        }

        @media (min-width: 992px) {

            /* lg */
            .portal-logo {
                width: 25%;
            }
        }

        /* Custom styles for cards and buttons to match the original theme */
        .card {
            border-radius: 1rem;
        }
    </style>

</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        /*NavBar::begin([
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
            $menuItems[] = [
                'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();*/
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer main-footer">
        <div class="container">
            <div class="pull-right hidden-sm" style="font-family: " Corbel", Arial, Helvetica, sans-serif;">
                <?= \Yii::$app->params['footerInfoRight']; ?>
            </div>
            <?= yii::t('app', \Yii::$app->params['footerInfoLeft']); ?> &copy;
            <?= yii::t('app', \Yii::$app->params['year']); ?> <a href="http://inlislite.perpusnas.go.id"
                target="_blank"><?= yii::t('app', 'Perpustakaan Nasional Republik Indonesia') ?></a>
        </div> <!-- /.container -->
    </footer>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>