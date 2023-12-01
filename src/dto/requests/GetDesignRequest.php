<?php

namespace DeliveryMatchApiLibrary\dto\requests;

class GetDesignRequest implements \JsonSerializable
{
    protected ?string $language;
    protected ?bool $logo;

    /**
     * @param string|null $language
     * @param bool|null $logo
     */
    public function __construct(?string $language = null, ?bool $logo = null)
    {
        $this->language = $language;
        $this->logo = $logo;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return bool|null
     */
    public function getLogo(): ?bool
    {
        return $this->logo;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
    return
        [
            'language' => $this->getLanguage(),
            'logo' => $this->getLogo(),
        ];
    }
}