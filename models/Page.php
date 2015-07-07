<?php

namespace app\models;

class Page extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'page';
    }
    
    public function attributeLabels()
    {
        return [
            'name' => 'Tên',
        ];
    }
    
    public static function listPagesUrl()
    {
        $model = Page::find()->asArray()->all();
        $pages = [];
        foreach ($model as $page) {
            $pages[$page['url']] = $page['name'];
        }
        return $pages;
    }

}
