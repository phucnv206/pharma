<?php
use yii\helpers\Url;
use app\components\Helpers;
?>
<div class="row">
    <?php foreach ($products as $product): ?>
    <div class="col-sm-3">
        <a href="<?= Url::to(['product/view', 'id' => $product['id'], 'slug' => $product['slug']]) ?>" class="product thumbnail">
            <img src="<?= $product['thumbnail'] ?>" alt="<?= $product['name'] ?>">
            <div class="cat"><?= $product->category->name ?></div>
            <div class="title"><?= $product['name'] ?></div>
            <div class="price text-bold"><?= Helpers::formatPrice($product['price']) ?></div>
        </a>
    </div>
    <?php endforeach ?>
</div>
<div class="text-right"><a href="#" class="view-more">Xem thêm sản phẩm</a></div>