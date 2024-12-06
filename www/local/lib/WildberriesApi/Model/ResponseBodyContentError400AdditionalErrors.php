<?php

namespace Placestart\WildberriesApi\Model;

class ResponseBodyContentError400AdditionalErrors extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $moveNmsToTrash;
    /**
     * 
     *
     * @return string
     */
    public function getMoveNmsToTrash(): string
    {
        return $this->moveNmsToTrash;
    }
    /**
     * 
     *
     * @param string $moveNmsToTrash
     *
     * @return self
     */
    public function setMoveNmsToTrash(string $moveNmsToTrash): self
    {
        $this->initialized['moveNmsToTrash'] = true;
        $this->moveNmsToTrash = $moveNmsToTrash;
        return $this;
    }
}