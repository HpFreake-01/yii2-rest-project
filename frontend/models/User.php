<?php

namespace frontend\models;



class User extends \common\models\User {
    public function fields() {
        return [
            'id',
            'username',
            'email'
        ];
    }

    public function extraFields() {
        return [];
    }
}