<?php

namespace DeliveryMatchApiLibrary\dto;

class Packages
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