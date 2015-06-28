<?php
use yii\helpers\Url;
?>
<div class="row note">
    <?php foreach ($posts as $post): ?>
    <div class="<?= $colClass ?>">
        <a href="<?= Url::to(['post/view', 'id' => $post['id'], 'slug' => $post['slug']]) ?>">
            <img src="<?= $post['thumbnail'] ?>" alt="<?= $post['title'] ?>" class="img-responsive">
            <p class="title"><?= $post['title'] ?></p>
        </a>
        <div class="desc">
            <?= $post['description'] ?>
        </div>
    </div>
    <?php endforeach ?>
</div>