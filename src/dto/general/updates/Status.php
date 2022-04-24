<?php

namespace DeliveryMatchApiLibrary\dto\general\updates;

class Status
{
    const DRAFT = "DRA";
    const NEW = "NEW";
    const DELETE = "DEL";
    const BOOKED = "PLAN";
    const PICKEDUP = "COMM";
    const DELIVERED = "DONE";
    const HUB = "HUB";
}