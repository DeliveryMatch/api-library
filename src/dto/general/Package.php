<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Package
{
    /** @var Package[] */
    private array $packages;

    /**
     * @param Package[] $packages
     */
    public function __construct(array $packages)
    {
        $this->packages = $packages;
    }
}