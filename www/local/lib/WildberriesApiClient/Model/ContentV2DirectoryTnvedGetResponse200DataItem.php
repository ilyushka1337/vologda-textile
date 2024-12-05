<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2DirectoryTnvedGetResponse200DataItem extends \ArrayObject
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
     * ТНВЭД-код
     *
     * @var string
     */
    protected $tnved;
    /**
    * - `true` - код маркировки требуется
    - `false` - код маркировки не требуется
    
    *
    * @var bool
    */
    protected $isKiz;
    /**
     * ТНВЭД-код
     *
     * @return string
     */
    public function getTnved(): string
    {
        return $this->tnved;
    }
    /**
     * ТНВЭД-код
     *
     * @param string $tnved
     *
     * @return self
     */
    public function setTnved(string $tnved): self
    {
        $this->initialized['tnved'] = true;
        $this->tnved = $tnved;
        return $this;
    }
    /**
    * - `true` - код маркировки требуется
    - `false` - код маркировки не требуется
    
    *
    * @return bool
    */
    public function getIsKiz(): bool
    {
        return $this->isKiz;
    }
    /**
    * - `true` - код маркировки требуется
    - `false` - код маркировки не требуется
    
    *
    * @param bool $isKiz
    *
    * @return self
    */
    public function setIsKiz(bool $isKiz): self
    {
        $this->initialized['isKiz'] = true;
        $this->isKiz = $isKiz;
        return $this;
    }
}