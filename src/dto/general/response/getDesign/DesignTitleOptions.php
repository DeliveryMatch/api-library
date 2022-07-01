<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getDesign;

class DesignTitleOptions
{
    private string $NL;
    private string $EN;
    private string $FR;
    private string $DE;
    private string $ES;
    private string $IT;

    /**
     * @return string
     */
    public function getNL(): string
    {
        return $this->NL;
    }

    /**
     * @return string
     */
    public function getEN(): string
    {
        return $this->EN;
    }

    /**
     * @return string
     */
    public function getFR(): string
    {
        return $this->FR;
    }

    /**
     * @return string
     */
    public function getDE(): string
    {
        return $this->DE;
    }

    /**
     * @return string
     */
    public function getES(): string
    {
        return $this->ES;
    }

    /**
     * @return string
     */
    public function getIT(): string
    {
        return $this->IT;
    }


}