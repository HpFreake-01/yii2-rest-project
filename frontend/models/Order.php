<?php

namespace frontend\models;

use Yii;
use yii\helpers\Url;
use yii\web\Linkable;

class Order extends \common\models\Order implements Linkable {
    public function fields() {
        return parent::fields();
    }

    public function extraFields() {
        return [
            'product'
        ];
    }
    public function getLinks()
    {
        return [
            'user' => Url::to(['user/view', 'id' => $this->id], true),
        ];
    }
}