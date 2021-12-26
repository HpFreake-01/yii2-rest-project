<?php

namespace common\models;

use Yii;

/**
 * Document model
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 */
class Order extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%order}}';
    }

    public function fields(){
        return [
            'id',
            'created_at',
            'updated_at',
            'first_name',
            'last_name',
            'address'
        ];
    }

    public function rules()
    {
        return [
            ['id', 'integer'],
            ['created_at', 'integer'],
            ['updated_at', 'integer'],
            ['first_name', 'string'],
            ['last_name', 'string'],
            ['address', 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
        ];
    }

    public function getProduct(){
        return $this->hasMany(Product::class,['id'=>'product_id'])->viaTable('product_in_order',['order_id'=>'id']);
    }

}
