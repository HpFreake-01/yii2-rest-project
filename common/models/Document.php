<?php

namespace common\models;

use Yii;

/**
 * Document model
 *
 * @property integer $id
 * @property string $title
 * @property string $name
 */
class Document extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%document}}';
    }

    public function fields(){
        return [
            'name',
            'title',
        ];
    }

    public function rules()
    {
        return [
            ['name', 'string'],
            ['title', 'string'],
        ];
    }

}
