<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblProduct
 */
class TblProduct
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
    private $detail;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $mad;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $image;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $miniDetail;

    /**
     * @var boolean
     */
    private $delFlag;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $catalog;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catalog = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return TblProduct
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
     * Set detail
     *
     * @param string $detail
     * @return TblProduct
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TblProduct
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set mad
     *
     * @param string $mad
     * @return TblProduct
     */
    public function setMad($mad)
    {
        $this->mad = $mad;

        return $this;
    }

    /**
     * Get mad
     *
     * @return string 
     */
    public function getMad()
    {
        return $this->mad;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return TblProduct
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return TblProduct
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return TblProduct
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
     * Set miniDetail
     *
     * @param string $miniDetail
     * @return TblProduct
     */
    public function setMiniDetail($miniDetail)
    {
        $this->miniDetail = $miniDetail;

        return $this;
    }

    /**
     * Get miniDetail
     *
     * @return string 
     */
    public function getMiniDetail()
    {
        return $this->miniDetail;
    }

    /**
     * Set delFlag
     *
     * @param boolean $delFlag
     * @return TblProduct
     */
    public function setDelFlag($delFlag)
    {
        $this->delFlag = $delFlag;

        return $this;
    }

    /**
     * Get delFlag
     *
     * @return boolean 
     */
    public function getDelFlag()
    {
        return $this->delFlag;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return TblProduct
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Add catalog
     *
     * @param \AdminBundle\Entity\TblCatalog $catalog
     * @return TblProduct
     */
    public function addCatalog(\AdminBundle\Entity\TblCatalog $catalog)
    {
        $this->catalog[] = $catalog;

        return $this;
    }

    /**
     * Remove catalog
     *
     * @param \AdminBundle\Entity\TblCatalog $catalog
     */
    public function removeCatalog(\AdminBundle\Entity\TblCatalog $catalog)
    {
        $this->catalog->removeElement($catalog);
    }

    /**
     * Get catalog
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatalog()
    {
        return $this->catalog;
    }
}
