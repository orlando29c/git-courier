<?php

namespace DeliveryBundle\Entity;

use CommonBundle\Entity\Product\Product;

class Delivery
{
    public $id;

    public $address;

    /** @var Product[] */
    public $products;
}