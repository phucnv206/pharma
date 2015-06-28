<?php

namespace app\components;

use yii\base\Widget;
use app\models\Post;

class NewsWidget extends Widget
{

    public $cate_id;
    public $col = 3;

    public function run()
    {
        $colClass = 'col-sm-' . 12 / $this->col;
        $posts = Post::find()->where(['status' => Post::STATUS_ENABLED, 'cate_id' => $this->cate_id])->orderBy('id DESC')->all();
        return $this->render('news', ['posts' => $posts, 'colClass' => $colClass]);
    }

}
