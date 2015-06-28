<div id="slide" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php foreach($slides as $i=>$slide): ?>
        <div class="item <?= $i===0 ? 'active':'' ?>">
            <a href="<?= $slide->url ?>"><img src="<?= $slide->src ?>" alt="<?= $slide->name ?>"></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>