<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyNumber
 *
 * @ORM\Table(name="survey_number", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_BE9ED7388AD4B571", columns={"recap_id"})})
 * @ORM\Entity
 */
class SurveyNumber
{
    /**
     * @var string
     *
     * @ORM\Column(name="pos", type="string", length=255, nullable=true)
     */
    private $pos;

    /**
     * @var string
     *
     * @ORM\Column(name="surveys", type="string", length=255, nullable=true)
     */
    private $surveys;

    /**
     * @var string
     *
     * @ORM\Column(name="misfire", type="string", length=255, nullable=true)
     */
    private $misfire;

    /**
     * @var string
     *
     * @ORM\Column(name="invalid", type="string", length=255, nullable=true)
     */
    private $invalid;

    /**
     * @var string
     *
     * @ORM\Column(name="scenarios", type="text", nullable=true)
     */
    private $scenarios;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Recap
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Recap")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recap_id", referencedColumnName="id")
     * })
     */
    private $recap;



    /**
     * Set pos
     *
     * @param string $pos
     * @return SurveyNumber
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return string 
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set surveys
     *
     * @param string $surveys
     * @return SurveyNumber
     */
    public function setSurveys($surveys)
    {
        $this->surveys = $surveys;

        return $this;
    }

    /**
     * Get surveys
     *
     * @return string 
     */
    public function getSurveys()
    {
        return $this->surveys;
    }

    /**
     * Set misfire
     *
     * @param string $misfire
     * @return SurveyNumber
     */
    public function setMisfire($misfire)
    {
        $this->misfire = $misfire;

        return $this;
    }

    /**
     * Get misfire
     *
     * @return string 
     */
    public function getMisfire()
    {
        return $this->misfire;
    }

    /**
     * Set invalid
     *
     * @param string $invalid
     * @return SurveyNumber
     */
    public function setInvalid($invalid)
    {
        $this->invalid = $invalid;

        return $this;
    }

    /**
     * Get invalid
     *
     * @return string 
     */
    public function getInvalid()
    {
        return $this->invalid;
    }

    /**
     * Set scenarios
     *
     * @param string $scenarios
     * @return SurveyNumber
     */
    public function setScenarios($scenarios)
    {
        $this->scenarios = $scenarios;

        return $this;
    }

    /**
     * Get scenarios
     *
     * @return string 
     */
    public function getScenarios()
    {
        return $this->scenarios;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return SurveyNumber
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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
     * Set recap
     *
     * @param \Acme\MainBundle\Entity\Recap $recap
     * @return SurveyNumber
     */
    public function setRecap(\Acme\MainBundle\Entity\Recap $recap = null)
    {
        $this->recap = $recap;

        return $this;
    }

    /**
     * Get recap
     *
     * @return \Acme\MainBundle\Entity\Recap 
     */
    public function getRecap()
    {
        return $this->recap;
    }
}
