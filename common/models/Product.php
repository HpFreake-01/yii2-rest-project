<?php

namespace common\models;

use Yii;

/**
 * Document model
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $name
 * @property string $color
 * @property integer $price
 */
class Product extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%product}}';
    }

    public function fields(){
        return [
            'id',
            'created_at',
            'updated_at',
            'name',
            'color',
            'price'
        ];
    }

    public function rules()
    {
        return [
            ['id', 'integer'],
            ['created_at', 'integer'],
            ['updated_at', 'integer'],
            ['name', 'string'],
            ['color', 'string'],
            ['price', 'integer'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'name' => 'Name',
            'color' => 'Color',
            'price' => 'Price',
        ];
    }

}
