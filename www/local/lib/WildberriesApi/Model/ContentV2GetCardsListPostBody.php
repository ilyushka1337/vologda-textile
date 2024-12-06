<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Настройки
     *
     * @var ContentV2GetCardsListPostBodySettings
     */
    protected $settings;
    /**
     * Настройки
     *
     * @return ContentV2GetCardsListPostBodySettings
     */
    public function getSettings(): ContentV2GetCardsListPostBodySettings
    {
        return $this->settings;
    }
    /**
     * Настройки
     *
     * @param ContentV2GetCardsListPostBodySettings $settings
     *
     * @return self
     */
    public function setSettings(ContentV2GetCardsListPostBodySettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}