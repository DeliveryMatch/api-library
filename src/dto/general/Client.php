<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Client implements \JsonSerializable
{
    protected int $id;
    protected ?string $channel;
    protected ?string $callback;
    protected string $action;
    protected ?string $method;
    protected ?bool $filter;
    protected ?bool $transportlabel;

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

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /** @return string|null */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /** @return string|null */
    public function getCallback(): ?string
    {
        return $this->callback;
    }

    /** @return string */
    public function getAction(): string
    {
        return $this->action;
    }

    /** @return string|null */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /** @return bool|null */
    public function getFilter(): ?bool
    {
        return $this->filter;
    }

    /** @return bool|null */
    public function getTransportlabel(): ?bool
    {
        return $this->transportlabel;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'id'   => $this->getId(),
            'channel' => $this->getChannel(),
            'callback' => $this->getCallback(),
            'action' => $this->getAction(),
            'method' => $this->getMethod(),
            'filter' => $this->getFilter(),
            'transportlabel' => $this->getTransportlabel()
        ];
    }
}