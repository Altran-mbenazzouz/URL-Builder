<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampagnGoal
 *
 * @ORM\Table(name="campagn_goal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CampagnGoalRepository")
 */
class CampagnGoal
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
     * @ORM\Column(name="Campagn_goal", type="string", length=255)
     */
    private $campagnGoal;

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
     * Set campagnGoal
     *
     * @param string $campagnGoal
     *
     * @return CampagnGoal
     */
    public function setCampagnGoal($campagnGoal)
    {
        $this->campagnGoal = $campagnGoal;

        return $this;
    }

    /**
     * Get campagnGoal
     *
     * @return string
     */
    public function getCampagnGoal()
    {
        return $this->campagnGoal;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return CampagnGoal
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
