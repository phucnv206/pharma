<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Category;
use app\models\Producer;
?>

<div id="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>
    
    <?= $form->field($model, 'pro_id')->dropDownList(Producer::listProducers()) ?>
    
    <?= $form->field($model, 'cate_id')->dropDownList(Category::listCategories()) ?>

    <?= $form->field($model, 'thumbnail', [
        'inputOptions' => ['id' => 'browse-img'],
        'inputTemplate' => '<div class="input-group">{input}<span class="input-group-btn"><button type="button" id="browse-btn" class="btn btn-default"><i class="fa fa-search"></i></a></span></div>'
    ])->textInput(['maxlength' => 255]) ?>
    
    <?= $form->field($model, 'price')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'description')->textarea(['id' => 'tiny-area']) ?>
    
    <?= $form->field($model, 'detail')->textarea(['id' => 'tiny-area']) ?>

    <?= $form->field($model, 'status')->inline()->radioList($model->listStatus()) ?>

    <div class="form-group text-center">
        <?= Html::a('Trở về', ['list'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton($model->isNewRecord ? 'Tạo mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJsFile('/js/tinymce/tinymce.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/js/wysiwyg.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
