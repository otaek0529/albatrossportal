<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="survey", uniqueConstraints={@ORM\UniqueConstraint(name="aol_id_uniq", columns={"aol_id"})}, indexes={@ORM\Index(name="IDX_AD5F9BFC19EB6921", columns={"client_id"})})
 * @ORM\Entity
 */
class Survey
{
    /**
     * @var string
     *
     * @ORM\Column(name="survey_name", type="string", length=255, nullable=false)
     */
    private $surveyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="aol_id", type="bigint", nullable=false)
     */
    private $aolId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Rules", mappedBy="survey")
     */
    private $rules;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rules = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set surveyName
     *
     * @param string $surveyName
     * @return Survey
     */
    public function setSurveyName($surveyName)
    {
        $this->surveyName = $surveyName;

        return $this;
    }

    /**
     * Get surveyName
     *
     * @return string 
     */
    public function getSurveyName()
    {
        return $this->surveyName;
    }

    /**
     * Set aolId
     *
     * @param integer $aolId
     * @return Survey
     */
    public function setAolId($aolId)
    {
        $this->aolId = $aolId;

        return $this;
    }

    /**
     * Get aolId
     *
     * @return integer 
     */
    public function getAolId()
    {
        return $this->aolId;
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
     * Set client
     *
     * @param \Acme\MainBundle\Entity\Client $client
     * @return Survey
     */
    public function setClient(\Acme\MainBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Acme\MainBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add rules
     *
     * @param \Acme\MainBundle\Entity\Rules $rules
     * @return Survey
     */
    public function addRule(\Acme\MainBundle\Entity\Rules $rules)
    {
        $this->rules[] = $rules;

        return $this;
    }

    /**
     * Remove rules
     *
     * @param \Acme\MainBundle\Entity\Rules $rules
     */
    public function removeRule(\Acme\MainBundle\Entity\Rules $rules)
    {
        $this->rules->removeElement($rules);
    }

    /**
     * Get rules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRules()
    {
        return $this->rules;
    }
}
