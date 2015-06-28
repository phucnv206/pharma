<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link href="/css/helper.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        
        <?php $this->beginBody() ?>
            <?= $this->render('_navbar') ?>
            <div id="main"><?= $content ?></div>    
            <?= $this->render('_footer') ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>