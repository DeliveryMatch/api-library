<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getDesign;

class DesignTitlesResponse
{
    /** @var DesignTitleOptions[] */
    private array $all;

    /**
     * @return DesignTitleOptions[]
     */
    public function getAll(): array
    {
        return $this->all;
    }
}