<?php

namespace frontend\models;


class Document extends \common\models\Document {
    public function fields() {
        return [
            'id',
            'title',
            'name'
        ];
    }

    public function extraFields() {
        return [];
    }
}