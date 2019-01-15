<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 */
class Country
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
     * @ORM\Column(name="Country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $value;

    /**
    * @ORM\ManyToMany(targetEntity="Confid", mappedBy="countries")
    **/
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
     * Set country.
     *
     * @param string $country
     *
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return Country
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
     * @return Country
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
