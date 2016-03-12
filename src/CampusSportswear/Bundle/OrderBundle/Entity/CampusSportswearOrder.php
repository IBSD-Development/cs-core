<?php

namespace CampusSportswear\Bundle\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cs_orders")
 */
class CampusSportswearOrder
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="OroCRM\Bundle\AccountBundle\Entity\Account")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    private $account;

    /**
     * @ORM\Column(name="item_description", type="text")
     */
    private $itemDescription;

    /**
     * @ORM\Column(name="item_quantity", type="integer")
     */
    private $itemQuantity;

    /**
     * @ORM\Column(name="item_quoted_price", type="float")
     */
    private $itemQuotedPrice;

    /**
     * @ORM\Column(name="item_recommended_price", type="float")
     */
    private $itemRecommendedPrice;

    /**
     * @ORM\Column(name="order_address", type="string", length=255)
     */
    private $orderAddress;

    /**
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @ORM\Column(name="item_graphic", type="string", length=255)
     */
    private $itemGraphic;

    /**
     * @ORM\Column(name="order_status", type="smallint")
     */
    private $orderStatus;

    /**
     * @ORM\OneToOne(targetEntity="Oro\Bundle\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToOne(targetEntity="Oro\Bundle\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
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
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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

