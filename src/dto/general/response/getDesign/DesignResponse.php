<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getDesign;

class DesignResponse
{
    private DesignColorsResponse $colors;
    private DesignTextResponse $text;
    private int $num_days_visible;
    private bool $show_carrier;
    private bool $hide_branding;
    private string $price_type;
    private string $border_type;
    private string $font;
    private string $carrier_order;
    private DesignTitlesResponse $titles;

    /**
     * @return DesignColorsResponse
     */
    public function getColors(): DesignColorsResponse
    {
        return $this->colors;
    }

    /**
     * @return DesignTextResponse
     */
    public function getText(): DesignTextResponse
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getNumDaysVisible(): int
    {
        return $this->num_days_visible;
    }

    /**
     * @return bool
     */
    public function isShowCarrier(): bool
    {
        return $this->show_carrier;
    }

    /**
     * @return bool
     */
    public function isHideBranding(): bool
    {
        return $this->hide_branding;
    }

    /**
     * @return string
     */
    public function getPriceType(): string
    {
        return $this->price_type;
    }

    /**
     * @return string
     */
    public function getBorderType(): string
    {
        return $this->border_type;
    }

    /**
     * @return string
     */
    public function getFont(): string
    {
        return $this->font;
    }

    /**
     * @return string
     */
    public function getCarrierOrder(): string
    {
        return $this->carrier_order;
    }

    /**
     * @return DesignTitlesResponse
     */
    public function getTitles(): DesignTitlesResponse
    {
        return $this->titles;
    }

}