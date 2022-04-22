<?php

namespace DeliveryMatchApiLibrary\dto;

class Client
{
    private int $id;
    private string $channel;
    private string $action;

    /**
     * @param int $id
     * @param string $channel
     * @param string $action
     */
    public function __construct(int $id, string $channel, string $action)
    {
        $this->id = $id;
        $this->channel = $channel;
        $this->action = $action;
    }


}