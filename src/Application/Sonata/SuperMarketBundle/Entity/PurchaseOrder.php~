<?php

namespace Application\Sonata\SuperMarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseOrder
 */
class PurchaseOrder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $orderDate;


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
     * Set status
     *
     * @param string $status
     * @return PurchaseOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return PurchaseOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    
        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }
    /**
     * @var \Application\Sonata\SuperMarketBundle\Entity\Customer
     */
    private $customer;


    /**
     * Set customer
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Customer $customer
     * @return PurchaseOrder
     */
    public function setCustomer(\Application\Sonata\SuperMarketBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;
    
        return $this;
    }

    /**
     * Get customer
     *
     * @return \Application\Sonata\SuperMarketBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderitem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderitem = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add orderitem
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\OrderItem $orderitem
     * @return PurchaseOrder
     */
    public function addOrderitem(\Application\Sonata\SuperMarketBundle\Entity\OrderItem $orderitem)
    {
        $this->orderitem[] = $orderitem;
    
        return $this;
    }

    /**
     * Remove orderitem
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\OrderItem $orderitem
     */
    public function removeOrderitem(\Application\Sonata\SuperMarketBundle\Entity\OrderItem $orderitem)
    {
        $this->orderitem->removeElement($orderitem);
    }

    /**
     * Get orderitem
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderitem()
    {
        return $this->orderitem;
    }
}