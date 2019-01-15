<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UrlAdress
 *
 * @ORM\Table(name="url_adress")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UrlAdressRepository")
 */
class UrlAdress
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
     * @ORM\Column(name="UrlAdress", type="string", length=255)
     */
    private $urlAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $value;


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
     * Set urlAdress.
     *
     * @param string $urlAdress
     *
     * @return UrlAdress
     */
    public function setUrlAdress($urlAdress)
    {
        $this->urlAdress = $urlAdress;

        return $this;
    }

    /**
     * Get urlAdress.
     *
     * @return string
     */
    public function getUrlAdress()
    {
        return $this->urlAdress;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return UrlAdress
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
