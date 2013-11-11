<?php

namespace Application\Sonata\SuperMarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 */
class OrderItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderItem
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
     * @var \Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder
     */
    private $purchaseorder;

    /**
     * @var \Application\Sonata\SuperMarketBundle\Entity\Product
     */
    private $products;


    /**
     * Set purchaseorder
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder $purchaseorder
     * @return OrderItem
     */
    public function setPurchaseorder(\Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder $purchaseorder = null)
    {
        $this->purchaseorder = $purchaseorder;
    
        return $this;
    }

    /**
     * Get purchaseorder
     *
     * @return \Application\Sonata\SuperMarketBundle\Entity\PurchaseOrder 
     */
    public function getPurchaseorder()
    {
        return $this->purchaseorder;
    }

    /**
     * Set products
     *
     * @param \Application\Sonata\SuperMarketBundle\Entity\Product $products
     * @return OrderItem
     */
    public function setProducts(\Application\Sonata\SuperMarketBundle\Entity\Product $products = null)
    {
        $this->products = $products;
    
        return $this;
    }

    /**
     * Get products
     *
     * @return \Application\Sonata\SuperMarketBundle\Entity\Product 
     */
    public function getProducts()
    {
        return $this->products;
    }
    private $price;
    
     public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

  
    public function getPrice()
    {
        return $this->price;
    }
   
    private $total;
    
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

  
    public function getTotal()
    {
        return $this->total;
    }
    
    
}