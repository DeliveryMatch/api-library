<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Packages implements \JsonSerializable
{
    /** @var Package[] */
    protected array $packages;

    /** @param Package[] $packages */
    public function __construct(array $packages)
    {
        $this->packages = $packages;
    }

    /** @return Package[] */
    public function getPackages(): array
    {
        return $this->packages;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'package' => $this->getPackages(),
        ];
    }
}