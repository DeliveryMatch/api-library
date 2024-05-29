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

    public function getTotalWeight(): float {
        $totalWeight = 0.0;
        foreach ($this->product as $product) $totalWeight += $product->getWeight() * $product->getQuantity();
        return $totalWeight;
    }

    public function getTotalValue(): float {
        $totalValue = 0.0;
        foreach ($this->product as $product) $totalValue += $product->getValue() * $product->getQuantity();
        return $totalValue;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'product' => $this->getProduct(),
        ];
    }
}