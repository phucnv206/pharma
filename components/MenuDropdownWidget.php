<?php

namespace app\components;

use yii\base\Widget;
use app\models\Producer;
use app\models\Category;

class MenuDropdownWidget extends Widget
{

    public function run()
    {
        $producers = Producer::find()->where(['status' => Producer::STATUS_ENABLED])->all();
        $categories = Category::find()->where(['status' => Category::STATUS_ENABLED])->all();
        return $this->render('menu_dropdown', [
            'producers' => $producers,
            'categories' => $categories,
        ]);
    }

}
