<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\Helpers;
use app\models\Page;
use yii\web\View;

?>

<div id="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>
    
    <div class="form-group">
        <?= Html::label('Loại liên kết', ['class' => 'control-label']) ?>
        <?= Html::dropDownList('type', null, Helpers::listUrlType(), ['class' => 'form-control type-select']) ?>
    </div>
    
    <div class="form-group">
        <?= Html::label('Trang', ['class' => 'control-label']) ?>
        <?= Html::dropDownList('type', null, Page::listPagesUrl(), ['class' => 'form-control url-select']) ?>
    </div>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 100, 'class' => 'form-control url-input']) ?>

    <?= $form->field($model, 'status')->inline()->radioList($model->listStatus()) ?>

    <div class="form-group text-center">
        <?= Html::a('Trở về', ['list'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton($model->isNewRecord ? 'Tạo mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("
    $('.type-select').change(function(){
        var type = $(this).val();
        if (type === 'external') {
            $('.url-select').parent('.form-group').hide();
            $('.url-input').val('');
        } else {
            $('.url-select').parent('.form-group').show();
            var url;
            if (type === 'pages') {
                url = '/page/ajaxcall';
            } else if (type === 'products') {
                url = '/product/ajaxcall';
            } else if (type === 'posts') {
                url = '/post/ajaxcall';
            }
            $.get(url).done(function(data){
                $('.url-select').html(data);
                $('.url-input').val($('.url-select').val());
            });
        }
    });
    $('.url-select').change(function(){
        $('.url-input').val($(this).val());
    });
", View::POS_END);