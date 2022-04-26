<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Quote implements \JsonSerializable
{
    /** @var Product[] */
    protected array $product;

    /** @param Product[] $product */
    public function __construct(array $product)
    {
        $this->product = $product;
    }

    /** @return Product[] */
    public function getProduct(): array
    {
        return $this->product;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'product' => $this->getProduct(),
        ];
    }
}