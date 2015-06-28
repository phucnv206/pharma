<?php

namespace app\models;
use app\components\Helpers;

class Product extends \yii\db\ActiveRecord
{

    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    public static function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return [
            [['name', 'thumbnail', 'cate_id', 'pro_id', 'price', 'status'], 'required'],
            [['cate_id', 'pro_id', 'price', 'status'], 'integer'],
            [['description', 'detail'], 'string'],
            [['status'], 'in', 'range' => array_keys(self::listStatus())],
            [['name', 'slug'], 'string', 'max' => 100],
            [['thumbnail'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Tên',
            'pro_id' => 'Hãng sản xuất',
            'cate_id' => 'Danh mục',
            'thumbnail' => 'Ảnh',
            'price' => 'Đơn giá',
            'description' => 'Mô tả',
            'detail' => 'Chi tiết',
            'status' => 'Trạng thái',
        ];
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'cate_id']);
    }
    
    public function getProducer()
    {
        return $this->hasOne(Producer::className(), ['id' => 'pro_id']);
    }
    
    public function getThumbnails()
    {
        return $this->hasMany(Thumbnail::className(), ['product_id' => 'id'])->limit(3);
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
    
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->slug = Helpers::getSlug($this->name);
            return true;
        } else {
            return false;
        }
    }

}
