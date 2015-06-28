<?php
use app\components\SlideWidget;
use app\components\BestProductsWidget;
use app\components\HotProductsWidget;
use app\components\NewsWidget;
$this->title = Yii::$app->name;
?>
<div id="site-index">
    <?= SlideWidget::widget(['id' => Yii::$app->params['slide_1_id']]); ?>
    <div class="container">
        <div class="heading">
            <div class="line"></div>
            Lưu ý
            <div class="line"></div>
        </div>
        <?= NewsWidget::widget(['cate_id' => Yii::$app->params['note_cate_id'], 'col' => 3]); ?>
        <div class="product-heading clearfix">
            <div class="pull-left margin-right-15">Sản phẩm nổi bật</div>
            <div class="line-wrapper"><div class="line"></div></div>
        </div>
        <?= BestProductsWidget::widget(); ?>
        <div class="product-heading clearfix">
            <div class="pull-left margin-right-15">Sản phẩm bán chạy</div>
            <div class="line-wrapper"><div class="line"></div></div>
        </div>
        <?= HotProductsWidget::widget(); ?>
    </div>
    <div class="margin-top-15"><?= SlideWidget::widget(['id' => Yii::$app->params['slide_2_id']]); ?></div>
    <div class="container">
        <div class="heading">
            <div class="line"></div>
            Tin tức
            <div class="line"></div>
        </div>
        <?= NewsWidget::widget(['cate_id' => Yii::$app->params['news_cate_id'], 'col' => 4]); ?>
    </div>
</div>
