<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Quote
{
    /** @var Product[] */
    private array $product;

    /**
     * @param Product[] $product
     */
    public function __construct(array $product)
    {
        $this->product = $product;
    }
}