<?php

namespace Placestart\WildberriesApi\Model;

class ContentV3MediaFilePostBody extends \ArrayObject
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
    protected $uploadfile;
    /**
     * 
     *
     * @return string
     */
    public function getUploadfile(): string
    {
        return $this->uploadfile;
    }
    /**
     * 
     *
     * @param string $uploadfile
     *
     * @return self
     */
    public function setUploadfile(string $uploadfile): self
    {
        $this->initialized['uploadfile'] = true;
        $this->uploadfile = $uploadfile;
        return $this;
    }
}