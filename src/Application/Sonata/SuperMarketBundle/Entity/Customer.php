<?php

namespace Application\Sonata\SuperMarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 */
class Customer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $pincode;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $website;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set pincode
     *
     * @param string $pincode
     * @return Customer
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    
        return $this;
    }

    /**
     * Get pincode
     *
     * @return string 
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Customer
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $purchaseorder;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->purchaseorder = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add purchaseorder
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder $purchaseorder
     * @return Customer
     */
    public function addPurchaseorder(\Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder $purchaseorder)
    {
        $this->purchaseorder[] = $purchaseorder;
    
        return $this;
    }

    /**
     * Remove purchaseorder
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder $purchaseorder
     */
    public function removePurchaseorder(\Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder $purchaseorder)
    {
        $this->purchaseorder->removeElement($purchaseorder);
    }

    /**
     * Get purchaseorder
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPurchaseorder()
    {
        return $this->purchaseorder;
    }
    
    
    public function __toString() {
        return $this->getFirstName().' '.$this->getLastName();
    }
}