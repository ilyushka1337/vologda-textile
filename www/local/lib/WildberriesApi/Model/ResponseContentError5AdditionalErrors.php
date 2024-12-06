<?php

namespace Placestart\WildberriesApi\Model;

class ResponseContentError5AdditionalErrors extends \ArrayObject
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
    protected $tagID;
    /**
     * 
     *
     * @return string
     */
    public function getTagID(): string
    {
        return $this->tagID;
    }
    /**
     * 
     *
     * @param string $tagID
     *
     * @return self
     */
    public function setTagID(string $tagID): self
    {
        $this->initialized['tagID'] = true;
        $this->tagID = $tagID;
        return $this;
    }
}