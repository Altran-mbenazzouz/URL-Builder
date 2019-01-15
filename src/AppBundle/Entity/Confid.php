<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Confid
 *
 * @ORM\Table(name="confid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfidRepository")
 */
class Confid
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
     * @ORM\Column(name="Value", type="string", length=9, unique=true)
     */
    private $value;

    /**
     * @ORM\ManyToMany(targetEntity="Brand", inversedBy="confids")
     * @ORM\JoinTable(
     *  name="confid_brand",
     *  joinColumns={
     *      @ORM\JoinColumn(name="config_id", referencedColumnName="id")            
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *  }
     * )
     * @ORM\JoinColumn()
    **/
    private $brands;

    /**
     * @ORM\ManyToMany(targetEntity="Country", inversedBy="confids")
     * @ORM\JoinTable(
     *  name="confid_country",
     *  joinColumns={
     *      @ORM\JoinColumn(name="config_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     *  }
     * )
    **/
    private $countries;


    /**
     * @ORM\ManyToMany(targetEntity="Source", inversedBy="confids")
     * @ORM\JoinTable(
     *  name="confid_source",
     *  joinColumns={
     *      @ORM\JoinColumn(name="config_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="source_id", referencedColumnName="id")
     *  }
     * )
    **/
    private $sources;


    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=12)
     */
    private $code;


    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brands = new \Doctrine\Common\Collections\ArrayCollection();
        $this->countries = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->$sources = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set value.
     *
     * @param string $value
     *
     * @return Confid
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
     * Add brand.
     *
     * @param \AppBundle\Entity\Brand $brand
     *
     * @return Confid
     */
    public function addBrand(\AppBundle\Entity\Brand $brand)
    {
        //$this->brands[] = $brand;
        $this->brands->add($brand);

        return $this;
    }

    /**
     * Remove brand.
     *
     * @param \AppBundle\Entity\Brand $brand
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBrand(\AppBundle\Entity\Brand $brand)
    {
        //return $this->brands->removeElement($brand);
        if($this->brands->contains($brand))
        {
             $this->brands->removeElement($brand);
        }

    }

    /**
     * Get brands.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Add country.
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Confid
     */
    public function addCountry(\AppBundle\Entity\Country $country)
    {
        //$this->countries[] = $country;
        $this->countries->add($country);
        return $this;
    }

    /**
     * Remove country.
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCountry(\AppBundle\Entity\Country $country)
    {
        return $this->countries->removeElement($country);
    }


    /**
     * Set countries.
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Confid
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get countries.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCountries()
    {
        return $this->countries;
    }

  

    /**
     * Add source.
     *
     * @param \AppBundle\Entity\Source $source
     *
     * @return Confid
     */
    public function addSource(\AppBundle\Entity\Source $source)
    {
        $this->sources[] = $source;

        return $this;
    }

    /**
     * Remove source.
     *
     * @param \AppBundle\Entity\Source $source
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSource(\AppBundle\Entity\Source $source)
    {
        return $this->sources->removeElement($source);
    }

    /**
     * Get sources.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return Confid
     */
    public function setCode($countyValue,$brandValue,$sourceValue)
    {
        $this->code = $countyValue .'_'. $brandValue .'_'. $sourceValue;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}