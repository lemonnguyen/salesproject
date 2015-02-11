<?php

namespace SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblProduct
 *
 * @ORM\Table(name="tbl_product")
 * @ORM\Entity
 */
class TblProduct
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text", length=65535, nullable=true)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="mad", type="string", length=45, nullable=false)
     */
    private $mad;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=45, nullable=false)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="mini_detail", type="string", length=200, nullable=true)
     */
    private $miniDetail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_flag", type="boolean", nullable=false)
     */
    private $delFlag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=true)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SalesBundle\Entity\TblCatalog", mappedBy="product")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add catalog
     *
     * @param \SalesBundle\Entity\TblCatalog $catalog
     * @return TblProduct
     */
    public function addCatalog(\SalesBundle\Entity\TblCatalog $catalog)
    {
        $this->catalog[] = $catalog;

        return $this;
    }

    /**
     * Remove catalog
     *
     * @param \SalesBundle\Entity\TblCatalog $catalog
     */
    public function removeCatalog(\SalesBundle\Entity\TblCatalog $catalog)
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
