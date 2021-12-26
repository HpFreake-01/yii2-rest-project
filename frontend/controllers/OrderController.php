<?php

namespace frontend\controllers;

use frontend\models\Order;


class OrderController extends BaseApiController
{
    public $modelClass = Order::class;
}