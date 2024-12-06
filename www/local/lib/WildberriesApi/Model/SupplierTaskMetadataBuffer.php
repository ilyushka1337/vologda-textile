<?php

namespace Placestart\WildberriesApi\Model;

class SupplierTaskMetadataBuffer extends \ArrayObject
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
     * ID загрузки
     *
     * @var int
     */
    protected $uploadID;
    /**
     * Статус загрузки: `1` — в обработке
     *
     * @var int
     */
    protected $status;
    /**
     * Дата и время, когда загрузка создана
     *
     * @var \DateTime
     */
    protected $uploadDate;
    /**
     * Дата и время, когда загрузка отправляется в обработку
     *
     * @var \DateTime
     */
    protected $activationDate;
    /**
     * Всего товаров
     *
     * @var int
     */
    protected $overAllGoodsNumber;
    /**
     * Товаров без ошибок (0, потому что загрузка в обработке)
     *
     * @var int
     */
    protected $successGoodsNumber;
    /**
     * ID загрузки
     *
     * @return int
     */
    public function getUploadID(): int
    {
        return $this->uploadID;
    }
    /**
     * ID загрузки
     *
     * @param int $uploadID
     *
     * @return self
     */
    public function setUploadID(int $uploadID): self
    {
        $this->initialized['uploadID'] = true;
        $this->uploadID = $uploadID;
        return $this;
    }
    /**
     * Статус загрузки: `1` — в обработке
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Статус загрузки: `1` — в обработке
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Дата и время, когда загрузка создана
     *
     * @return \DateTime
     */
    public function getUploadDate(): \DateTime
    {
        return $this->uploadDate;
    }
    /**
     * Дата и время, когда загрузка создана
     *
     * @param \DateTime $uploadDate
     *
     * @return self
     */
    public function setUploadDate(\DateTime $uploadDate): self
    {
        $this->initialized['uploadDate'] = true;
        $this->uploadDate = $uploadDate;
        return $this;
    }
    /**
     * Дата и время, когда загрузка отправляется в обработку
     *
     * @return \DateTime
     */
    public function getActivationDate(): \DateTime
    {
        return $this->activationDate;
    }
    /**
     * Дата и время, когда загрузка отправляется в обработку
     *
     * @param \DateTime $activationDate
     *
     * @return self
     */
    public function setActivationDate(\DateTime $activationDate): self
    {
        $this->initialized['activationDate'] = true;
        $this->activationDate = $activationDate;
        return $this;
    }
    /**
     * Всего товаров
     *
     * @return int
     */
    public function getOverAllGoodsNumber(): int
    {
        return $this->overAllGoodsNumber;
    }
    /**
     * Всего товаров
     *
     * @param int $overAllGoodsNumber
     *
     * @return self
     */
    public function setOverAllGoodsNumber(int $overAllGoodsNumber): self
    {
        $this->initialized['overAllGoodsNumber'] = true;
        $this->overAllGoodsNumber = $overAllGoodsNumber;
        return $this;
    }
    /**
     * Товаров без ошибок (0, потому что загрузка в обработке)
     *
     * @return int
     */
    public function getSuccessGoodsNumber(): int
    {
        return $this->successGoodsNumber;
    }
    /**
     * Товаров без ошибок (0, потому что загрузка в обработке)
     *
     * @param int $successGoodsNumber
     *
     * @return self
     */
    public function setSuccessGoodsNumber(int $successGoodsNumber): self
    {
        $this->initialized['successGoodsNumber'] = true;
        $this->successGoodsNumber = $successGoodsNumber;
        return $this;
    }
}