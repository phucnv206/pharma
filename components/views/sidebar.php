<?php
use yii\helpers\Url;
?>
<div class="sidebar">
    <div class="heading">Hãng sản xuất</div>
    <ul>
        <?php foreach ($producers as $producer): ?>
            <li>
                <a href="<?= Url::to(['producer/view', 'id' => $producer->id, 'slug' => $producer->slug]) ?>">
                    <?= $producer->name ?>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<div class="sidebar">
    <div class="heading">Danh mục sản phẩm</div>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li>
                <a href="<?= Url::to(['category/view', 'id' => $category->id, 'slug' => $category->slug]) ?>">
                    <?= $category->name ?>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>