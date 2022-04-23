<?php

namespace DeliveryMatchApiLibrary\dto;

class Client
{
    private int $id;
    private ?string $channel;
    private ?string $callback;
    private string $action;
    private ?string $method;
    private ?bool $filter;
    private ?bool $transportlabel;

    /**
     * @param int $id
     * @param string|null $channel
     * @param string|null $callback
     * @param string $action
     * @param string|null $method
     * @param bool|null $filter
     * @param bool|null $transportlabel
     */
    public function __construct(int $id, ?string $channel, ?string $callback, string $action, ?string $method, ?bool $filter, ?bool $transportlabel)
    {
        $this->id = $id;
        $this->channel = $channel;
        $this->callback = $callback;
        $this->action = $action;
        $this->method = $method;
        $this->filter = $filter;
        $this->transportlabel = $transportlabel;
    }
}