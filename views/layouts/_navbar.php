<?php
use app\components\MenuWidget;
use app\components\LogoWidget;
?>
<header>
    <div class="container top-nav clearfix">
        <div class="pull-right">
            <a href="#">Login</a>
            <a href="#">Cart / <span class="text-bold">0 đ</span></a>
            <a href="#"><img src="/img/cart-icon.png" alt=""></a>
        </div>
    </div>
    <nav>
        <div class="container clearfix">
            <div class="pull-left logo">
                <a href="<?= Yii::$app->homeUrl ?>">
                    <img src="<?= LogoWidget::widget() ?>" alt="<?= Yii::$app->name ?>">
                </a>
            </div>
            <div class="pull-right">
                <?= MenuWidget::widget() ?>
            </div>
        </div>
    </nav>
</header>