<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunicationMedium
 *
 * @ORM\Table(name="communication_medium")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommunicationMediumRepository")
 */
class CommunicationMedium
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
     * @ORM\Column(name="Communication_medium", type="string", length=255)
     */
    private $communicationMedium;

     /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $value;


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
     * Set communicationMedium
     *
     * @param string $communicationMedium
     *
     * @return CommunicationMedium
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
     * Set value.
     *
     * @param string $value
     *
     * @return CommunicationMedium
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
}
