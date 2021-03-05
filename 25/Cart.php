<?php

namespace twenty_five;

class Cart
{
    private $products = [];

    function add($product) {
        $this->products[] = $product;

        return $this;
    }

    function remove($name) {
        if (($key = array_search($name, array_column($this->products, 'name'))) != false) {
            unset($this->products[$key]);
        }

        return $this;
    }

    public function getTotalCost()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getCost();
        }

        return $total;
    }

    public function getTotalQuantity()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getQuantity();
        }

        return $total;
    }

    public function getAveragePrice()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total / count($this->products);
    }
}