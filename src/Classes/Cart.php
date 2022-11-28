<?php

namespace App\Classes;

class Cart
{
    /**
     * An unique ID for the cart.
     *
     * @var string
     */
    protected $cartId;

    /**
     * Maximum item allowed in the cart.
     *
     * @var int
     */
    protected $cartMaxItem = 0;

    /**
     * Maximum quantity of a item allowed in the cart.
     *
     * @var int
     */
    protected $itemMaxQuantity = 0;

    /**
     * Enable or disable cookie.
     *
     * @var bool
     */
    protected $useCookie = false;

    /**
     * A collection of cart items.
     *
     * @var array
     */
    private $items = [];

    /**
     * Initialize cart.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {

    }

    /**
     * Get items in  cart.
     *
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Check if the cart is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty(array_filter($this->items));
    }

    /**
     * Get the total of item in cart.
     *
     * @return int
     */
    public function getTotalItem()
    {
        return 0;
    }

    /**
     * Get the total of item quantity in cart.
     *
     * @return int
     */
    public function getTotalQuantity()
    {

    }


    /**
     * Remove all items from cart.
     */
    public function clear()
    {

    }

    /**
     * Get one item from cart
     *
     * @param string $id
     *
     * @return array
     */
    public function getItem($id)
    {
        return [];
    }

    /**
     * Add item to cart.
     *
     * @param string $id
     * @param int    $quantity
     *
     * @return bool
     */
    public function add($id, $quantity = 1)
    {
        return true;
    }

    /**
     * Update item quantity.
     *
     * @param string $id
     * @param int    $quantity
     *
     * @return bool
     */
    public function update($id, $quantity = 1)
    {
        return true;
    }

    /**
     * Remove item from cart.
     *
     * @param string $id
     *
     * @return bool
     */
    public function remove($id)
    {
        return false;
    }

    /**
     * Destroy cart session.
     *
     * @return bool
     */
    public function destroy()
    {
        return true;
    }

    /**
     * Read items from cart.
     *
     * @return bool
     */
    private function read()
    {
        return true;

    }


}