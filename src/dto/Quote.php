<?php

namespace DeliveryMatchApiLibrary\dto;

class Quote
{
    private Product $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
}