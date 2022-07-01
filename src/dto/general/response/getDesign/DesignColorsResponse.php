<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getDesign;

class DesignColorsResponse
{
    private string $background;
    private string $text;
    private string $button_background;
    private string $button_text;
    private string $price_background;
    private string $price_text;
    private string $info_background;
    private string $info_text;
    private string $table_header;
    private string $table_text;
    private string $table_border;
    private string $border;

    /**
     * @return string
     */
    public function getBackground(): string
    {
        return $this->background;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getButtonBackground(): string
    {
        return $this->button_background;
    }

    /**
     * @return string
     */
    public function getButtonText(): string
    {
        return $this->button_text;
    }

    /**
     * @return string
     */
    public function getPriceBackground(): string
    {
        return $this->price_background;
    }

    /**
     * @return string
     */
    public function getPriceText(): string
    {
        return $this->price_text;
    }

    /**
     * @return string
     */
    public function getInfoBackground(): string
    {
        return $this->info_background;
    }

    /**
     * @return string
     */
    public function getInfoText(): string
    {
        return $this->info_text;
    }

    /**
     * @return string
     */
    public function getTableHeader(): string
    {
        return $this->table_header;
    }

    /**
     * @return string
     */
    public function getTableText(): string
    {
        return $this->table_text;
    }

    /**
     * @return string
     */
    public function getTableBorder(): string
    {
        return $this->table_border;
    }

    /**
     * @return string
     */
    public function getBorder(): string
    {
        return $this->border;
    }
}