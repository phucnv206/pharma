<?php

namespace app\models;

class Menu extends \yii\db\ActiveRecord
{

    const STATUS_DISABLED = 0;
    const STATUS_ENABLED = 1;

    public static function tableName()
    {
        return 'menu';
    }

    public function rules()
    {
        return [
            [['name', 'url', 'status'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Tên',
            'url' => 'Liên kết',
            'status' => 'Trạng thái',
            'type' => 'Loại liên kết',
        ];
    }
    
    public static function listStatus()
    {
        return [
            self::STATUS_DISABLED => 'Ẩn',
            self::STATUS_ENABLED => 'Hiện'
        ];
    }

    public static function getStatusLabel($status)
    {
        $array = self::listStatus();
        return $array[$status];
    }

}
