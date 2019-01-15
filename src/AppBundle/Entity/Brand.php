<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandRepository")
 */
class Brand
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Brand", type="string", length=255)
     */
    private $brand;

     /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $value;

    /**
    * @ORM\ManyToMany(targetEntity="Confid", mappedBy="brands")
    */
    private $confids;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->confids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brand.
     *
     * @param string $brand
     *
     * @return Brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand.
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return Brand
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Add confid.
     *
     * @param \AppBundle\Entity\Confid $confid
     *
     * @return Brand
     */
    public function addConfid(\AppBundle\Entity\Confid $confid)
    {
        $this->confids[] = $confid;

        return $this;
    }

    /**
     * Remove confid.
     *
     * @param \AppBundle\Entity\Confid $confid
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeConfid(\AppBundle\Entity\Confid $confid)
    {
        return $this->confids->removeElement($confid);
    }

    /**
     * Get confids.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfids()
    {
        return $this->confids;
    }
}
