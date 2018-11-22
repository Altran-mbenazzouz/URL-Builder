<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * uBuilder
 *
 * @ORM\Table(name="u_builder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\uBuilderRepository")
 */
class uBuilder
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
     * @ORM\Column(name="Brand", type="string", length=255)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="Audience", type="string", length=255)
     */
    private $audience;

    /**
     * @var string
     *
     * @ORM\Column(name="Product_category", type="string", length=255)
     */
    private $productCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="Vehicle", type="string", length=255)
     */
    private $vehicle;

    /**
     * @var string
     *
     * @ORM\Column(name="Context", type="string", length=255)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="Campaign_goal", type="string", length=255)
     */
    private $campaignGoal;

     /**
     * @var string
     *
     * @ORM\Column(name="communication_medium", type="string", length=255)
     */
    private $communicationMedium;

    /**
     * @var string
     *
     * @ORM\Column(name="Source", type="string", length=255)
     */
    private $source;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return uBuilder
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return uBuilder
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
     * Set audience
     *
     * @param string $audience
     *
     * @return uBuilder
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * Get audience
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Set productCategory
     *
     * @param string $productCategory
     *
     * @return uBuilder
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set vehicle
     *
     * @param string $vehicle
     *
     * @return uBuilder
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return string
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set context
     *
     * @param string $context
     *
     * @return uBuilder
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set campaignGoal
     *
     * @param string $campaignGoal
     *
     * @return uBuilder
     */
    public function setCampaignGoal($campaignGoal)
    {
        $this->campaignGoal = $campaignGoal;

        return $this;
    }

    /**
     * Get campaignGoal
     *
     * @return string
     */
    public function getCampaignGoal()
    {
        return $this->campaignGoal;
    }

    /**
     * Set communicationMedium
     *
     * @param string $communicationMedium
     *
     * @return uBuilder
     */
    public function setCommunicationMedium($communicationMedium)
    {
        $this->communicationMedium = $communicationMedium;

        return $this;
    }

    /**
     * Get communicationMedium
     *
     * @return string
     */
    public function getCommunicationMedium()
    {
        return $this->communicationMedium;
    }

     /**
     * Set source
     *
     * @param string $source
     *
     * @return uBuilder
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }


}

