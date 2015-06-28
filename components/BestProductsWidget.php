<?php

namespace app\components;

use yii\base\Widget;
use app\models\Product;

class BestProductsWidget extends Widget
{

    public function run()
    {
        $products = Product::find()->where(['status' => Product::STATUS_ENABLED])->orderBy('purchase_count DESC')->all();
        return $this->render('products', ['products' => $products]);
    }

}
