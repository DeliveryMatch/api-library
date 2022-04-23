<?php

namespace DeliveryMatchApiLibrary\dto\general;

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