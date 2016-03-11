<?php

namespace CampusSportswear\Bundle\OrderBundle\Entity;

/**
 * CampusSportswearOrder
 */
class CampusSportswearOrder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $accountId;

    /**
     * @var string
     */
    private $itemDescription;

    /**
     * @var integer
     */
    private $itemQuantity;

    /**
     * @var float
     */
    private $itemQuotedPrice;

    /**
     * @var float
     */
    private $itemRecommendedPrice;

    /**
     * @var string
     */
    private $orderAddress;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $itemGraphic;

    /**
     * @var integer
     */
    private $orderStatus;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $updatedBy;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set itemDescription
     *
     * @param string $itemDescription
     *
     * @return CampusSportswearOrder
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Set itemQuantity
     *
     * @param integer $itemQuantity
     *
     * @return CampusSportswearOrder
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;

        return $this;
    }

    /**
     * Get itemQuantity
     *
     * @return integer
     */
    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    /**
     * Set itemQuotedPrice
     *
     * @param float $itemQuotedPrice
     *
     * @return CampusSportswearOrder
     */
    public function setItemQuotedPrice($itemQuotedPrice)
    {
        $this->itemQuotedPrice = $itemQuotedPrice;

        return $this;
    }

    /**
     * Get itemQuotedPrice
     *
     * @return float
     */
    public function getItemQuotedPrice()
    {
        return $this->itemQuotedPrice;
    }

    /**
     * Set itemRecommendedPrice
     *
     * @param float $itemRecommendedPrice
     *
     * @return CampusSportswearOrder
     */
    public function setItemRecommendedPrice($itemRecommendedPrice)
    {
        $this->itemRecommendedPrice = $itemRecommendedPrice;

        return $this;
    }

    /**
     * Get itemRecommendedPrice
     *
     * @return float
     */
    public function getItemRecommendedPrice()
    {
        return $this->itemRecommendedPrice;
    }

    /**
     * Set orderAddress
     *
     * @param string $orderAddress
     *
     * @return CampusSportswearOrder
     */
    public function setOrderAddress($orderAddress)
    {
        $this->orderAddress = $orderAddress;

        return $this;
    }

    /**
     * Get orderAddress
     *
     * @return string
     */
    public function getOrderAddress()
    {
        return $this->orderAddress;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return CampusSportswearOrder
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set itemGraphic
     *
     * @param string $itemGraphic
     *
     * @return CampusSportswearOrder
     */
    public function setItemGraphic($itemGraphic)
    {
        $this->itemGraphic = $itemGraphic;

        return $this;
    }

    /**
     * Get itemGraphic
     *
     * @return string
     */
    public function getItemGraphic()
    {
        return $this->itemGraphic;
    }

    /**
     * Set orderStatus
     *
     * @param integer $orderStatus
     *
     * @return CampusSportswearOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CampusSportswearOrder
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CampusSportswearOrder
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get account id of order
     *
     * @return account
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param mixed $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param mixed $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }


}

