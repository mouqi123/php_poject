<?php
/**
 * Created by PhpStorm.
 * User: mackie
 * Date: 17-2-28
 * Time: 下午5:09
 */

namespace app\cart\storage;


interface StorageInterface
{
    /**
     * @return array of cart items
     */
    public function load();

    /**
     * @param array $items from cart
     */
    public function save(array $items);
}