<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getDesign;

class DesignResponse
{
    public DesignColorsResponse $colors;
    public DesignTextResponse $text;
    public int $num_days_visible;
    public bool $show_carrier;
    public bool $hide_branding;
    public string $price_type;
    public string $border_type;
    public string $font;
    public string $carrier_order;
    public DesignTitlesResponse $titles;
}