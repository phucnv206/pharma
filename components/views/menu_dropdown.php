<?php
use yii\helpers\Url;
?>
<div class="product-dropdown">
    <div class="row">
        <div class="col-sm-4"><img src="/img/product-1.jpg" alt=""></div>
        <div class="col-sm-4">
            <ul class="ul-dropdown">
                <li class="heading">Hãng sản xuất</li>
                <?php foreach ($producers as $producer): ?>
                    <li>
                        <a href="<?= Url::to(['producer/view', 'id' => $producer->id, 'slug' => $producer->slug]) ?>">
                            <i class="fa fa-angle-right"></i> <?= $producer->name ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul class="ul-dropdown">
                <li class="heading">Danh mục</li>
                <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="<?= Url::to(['category/view', 'id' => $category->id, 'slug' => $category->slug]) ?>">
                            <i class="fa fa-angle-right"></i> <?= $category->name ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>