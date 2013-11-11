<?php

namespace Application\Sonata\SuperMarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $slug;


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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Product
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Product
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @var \Application\Sonata\SuperMarketBundle\Entity\Brand
     */
    private $brand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set brand
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Brand $brand
     * @return Product
     */
    public function setBrand(\Application\Sonata\SuperMarketBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return \Application\Sonata\SuperMarketBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Add category
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Category $category
     * @return Product
     */
    public function addCategory(\Application\Sonata\SuperMarketBundle\Entity\Category $category)
    {
        $this->category[] = $category;
    
        return $this;
    }

    /**
     * Remove category
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Category $category
     */
    public function removeCategory(\Application\Sonata\SuperMarketBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderItem;


    /**
     * Add orderItem
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Product $orderItem
     * @return Product
     */
    public function addOrderItem(\Application\Sonata\SuperMarketBundle\Entity\Product $orderItem)
    {
        $this->orderItem[] = $orderItem;
    
        return $this;
    }

    /**
     * Remove orderItem
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Product $orderItem
     */
    public function removeOrderItem(\Application\Sonata\SuperMarketBundle\Entity\Product $orderItem)
    {
        $this->orderItem->removeElement($orderItem);
    }

    /**
     * Get orderItem
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }
    
    
    public function __toString()
    {
        return $this->getName();
    }
}