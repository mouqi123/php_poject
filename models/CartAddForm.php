<?php
/**
 * Created by PhpStorm.
 * User: mackie
 * Date: 17-2-28
 * Time: 下午5:37
 */

namespace app\models;

use yii\base\Model;

class CartAddForm extends Model
{
    public $productId;
    public $amount;
    public function rules()
    {
        return [
            [['productId', 'amount'], 'required'],
            [['amount'], 'integer', 'min' => 1],
        ];
    }
}