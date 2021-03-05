<?php


namespace twenty_five;


class Product
{
    private $name;
    private $price;
    private $quantity;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return double total cost of product
     */
    public function getCost()
    {
        return $this->getPrice() * $this->getQuantity();
    }
}