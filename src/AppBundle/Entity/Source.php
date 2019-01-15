<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Source
 *
 * @ORM\Table(name="source")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SourceRepository")
 */
class Source
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
     * @ORM\Column(name="Source", type="string", length=255)
     */
    private $source;


     /**
    * @ORM\ManyToMany(targetEntity="Confid", mappedBy="sources")
    */
    private $confids;


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
     * Set source
     *
     * @param string $source
     *
     * @return Source
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->confids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add confid.
     *
     * @param \AppBundle\Entity\Confid $confid
     *
     * @return Source
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
