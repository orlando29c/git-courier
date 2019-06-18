<?php

namespace CommonBundle\Entity\Product;

class Product
{
    const DRY = 'dry';
    const WHITE = 'white';

    public $id;

    public $type = self::DRY;

    public $name;

    public $category;

    public $length;
    public $width;
    public $height;
    public $weight;
}
