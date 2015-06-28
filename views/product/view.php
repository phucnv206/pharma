<?php

use yii\helpers\Url;
use app\components\Helpers;
use yii\web\View;

$this->title = $product->name;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div id="product-view">
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <div class="img-preview">
                        <img class="img-responsive active" src="<?= $product->thumbnail ?>" alt="<?= $product->name ?>">
                        <?php foreach ($product->thumbnails as $i=>$thumbnail): ?>
                        <img class="img-responsive" src="<?= $thumbnail->url ?>" alt="<?= $product->name ?>">
                        <?php endforeach ?>
                    </div>
                    <div class="img-navigator row">
                        <div class="col-xs-3"><img class="img-responsive img-thumbnail" src="<?= $product->thumbnail ?>" alt="<?= $product->name ?>"></div>
                        <?php foreach ($product->thumbnails as $i=>$thumbnail): ?>
                        <div class="col-xs-3"><img class="img-responsive img-thumbnail" src="<?= $thumbnail->url ?>" alt="<?= $product->name ?>"></div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="title"><?= $product->name ?></p>
                    <p class="price text-bold"><?= Helpers::formatPrice($product->price) ?></p>
                    <p class="option">
                        <button class="down btn btn-sm btn-default"><i class="fa fa-caret-left"></i></button>
                        <span class="quantity">1</span>
                        <button class="up btn btn-sm btn-default"><i class="fa fa-caret-right"></i></button>
                    </p>
                    <div class="row btn-checkout">
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-block"><i class="fa fa-cart-plus pull-left"></i> Thêm vào giỏ hàng</button>
                            <button class="btn btn-default btn-block">
                                Mua ngay giao hàng tận nơi<br>
                                <small>(Thanh toán khi nhận hàng)</small>
                            </button>
                        </div>
                    </div>
                    <div class="sharing"><div class="addthis_native_toolbox"></div></div>
                    <div class="desc"><?= $product->description ?></div>
                </div>
            </div>
            <div class="detail">
                <div class="row"><div class="col-sm-6"><div class="heading">Chi tiết sản phẩm</div></div></div>
                <?= $product->detail ?>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="relate">
                <div class="heading text-bold">Cùng sản phẩm</div>
                <?php foreach ($relateProducts as $rproduct): ?>
                <div class="rproduct">
                    <div class="row">
                        <div class="col-xs-5">
                            <a href="<?= Url::to(['product/view', 'id' => $rproduct->id, 'slug' => $rproduct->slug]) ?>">
                               <img src="<?= $rproduct->thumbnail ?>" alt="<?= $rproduct->name ?>" class="img-responsive img-thumbnail">
                            </a>
                        </div>
                        <div class="col-xs-7">
                            <p class="rtitle"><?= $rproduct->name ?></p>
                            <p class="rprice text-bold"><?= Helpers::formatPrice($rproduct->price) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <p><img src="/img/ads-1.png" alt="" class="img-responsive"></p>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-558f80370714aeba', ['position' => View::POS_BEGIN, 'async' => 'async']);
$this->registerJs("
    
", View::POS_END);
