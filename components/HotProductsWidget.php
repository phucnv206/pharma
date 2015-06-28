<?php

namespace app\components;

use yii\base\Widget;
use app\models\Product;

class HotProductsWidget extends Widget
{

    public function run()
    {
        $products = Product::find()->where(['status' => Product::STATUS_ENABLED])->orderBy('id DESC')->all();
        return $this->render('products', ['products' => $products]);
    }

}
