<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getLabel;

class LabelPackagesResponse
{
    public int $sequence;
    public string $barcode;
    public string $ZPL;
    public string $labelURL;
}