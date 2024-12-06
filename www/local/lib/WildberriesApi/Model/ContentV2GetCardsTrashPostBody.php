<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostBody extends \ArrayObject
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
     * @var ContentV2GetCardsTrashPostBodySettings
     */
    protected $settings;
    /**
     * Настройки
     *
     * @return ContentV2GetCardsTrashPostBodySettings
     */
    public function getSettings(): ContentV2GetCardsTrashPostBodySettings
    {
        return $this->settings;
    }
    /**
     * Настройки
     *
     * @param ContentV2GetCardsTrashPostBodySettings $settings
     *
     * @return self
     */
    public function setSettings(ContentV2GetCardsTrashPostBodySettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}