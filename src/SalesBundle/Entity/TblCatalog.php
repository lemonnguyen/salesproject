<?php

namespace SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCatalog
 *
 * @ORM\Table(name="tbl_catalog")
 * @ORM\Entity
 */
class TblCatalog
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
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=true)
     */
    private $createDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="del_flag", type="boolean", nullable=false)
     */
    private $delFlag;

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
     * @ORM\ManyToMany(targetEntity="SalesBundle\Entity\TblProduct", inversedBy="catalog")
     * @ORM\JoinTable(name="tbl_catalog_product",
     *   joinColumns={
     *     @ORM\JoinColumn(name="catalog_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *   }
     * )
     */
    private $product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return TblCatalog
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
     * @return TblCatalog
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
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return TblCatalog
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
     * Set delFlag
     *
     * @param boolean $delFlag
     * @return TblCatalog
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add product
     *
     * @param \SalesBundle\Entity\TblProduct $product
     * @return TblCatalog
     */
    public function addProduct(\SalesBundle\Entity\TblProduct $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \SalesBundle\Entity\TblProduct $product
     */
    public function removeProduct(\SalesBundle\Entity\TblProduct $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
