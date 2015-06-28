<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\Helpers;

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="product-list">

    <p class="text-right"><?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?></p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'attribute' => 'thumbnail',
                'format' => 'image',
                'contentOptions' => ['class' => 'thumbnail-list']
            ],
            [
                'attribute' => 'pro_id',
                'value' => function ($model) {
                    return $model->producer->name;
                }
            ],
            [
                'attribute' => 'cate_id',
                'value' => function ($model) {
                    return $model->category->name;
                }
            ],
            [
                'attribute' => 'price',
                'value' => function ($model) {
                    return Helpers::formatPrice($model->price);
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->getStatusLabel($model->status);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['class' => 'text-center'],
                'template' => '{update} {delete} {thumbnail}',
                'header' => 'Tùy chọn',
                'headerOptions' => ['class' => 'text-center'],
                'buttons' => [
                    'thumbnail' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-picture-o"></i>', ['thumbnail/list', 'product_id' => $key], ['title' => 'Danh sách hình']);
                    }
                ],
            ],
        ],
    ]); ?>

</div>
