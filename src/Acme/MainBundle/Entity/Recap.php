<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recap
 *
 * @ORM\Table(name="recap", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2FBA1D20FC1F443F", columns={"actual_id"}), @ORM\UniqueConstraint(name="UNIQ_2FBA1D202634E2A2", columns={"planned_id"}), @ORM\UniqueConstraint(name="UNIQ_2FBA1D2065799FDE", columns={"infomations_id"})}, indexes={@ORM\Index(name="IDX_2FBA1D2059FFD0DF", columns={"customwave_id"}), @ORM\Index(name="IDX_2FBA1D20A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Recap
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="countryType", type="boolean", nullable=false)
     */
    private $countrytype;

    /**
     * @var string
     *
     * @ORM\Column(name="submittime", type="string", length=255, nullable=false)
     */
    private $submittime;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\SurveyNumber
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\SurveyNumber")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actual_id", referencedColumnName="id")
     * })
     */
    private $actual;

    /**
     * @var \Acme\MainBundle\Entity\SurveyNumber
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\SurveyNumber")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planned_id", referencedColumnName="id")
     * })
     */
    private $planned;

    /**
     * @var \Acme\MainBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Acme\MainBundle\Entity\Infomation
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Infomation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="infomations_id", referencedColumnName="id")
     * })
     */
    private $infomations;

    /**
     * @var \Acme\MainBundle\Entity\Customwave
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customwave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customwave_id", referencedColumnName="id")
     * })
     */
    private $customwave;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Country", inversedBy="recap")
     * @ORM\JoinTable(name="recap_country",
     *   joinColumns={
     *     @ORM\JoinColumn(name="recap_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     *   }
     * )
     */
    private $country;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Aolquestionnaire", mappedBy="recap")
     */
    private $aolquestionnaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->country = new \Doctrine\Common\Collections\ArrayCollection();
        $this->aolquestionnaire = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Recap
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set countrytype
     *
     * @param boolean $countrytype
     * @return Recap
     */
    public function setCountrytype($countrytype)
    {
        $this->countrytype = $countrytype;

        return $this;
    }

    /**
     * Get countrytype
     *
     * @return boolean 
     */
    public function getCountrytype()
    {
        return $this->countrytype;
    }

    /**
     * Set submittime
     *
     * @param string $submittime
     * @return Recap
     */
    public function setSubmittime($submittime)
    {
        $this->submittime = $submittime;

        return $this;
    }

    /**
     * Get submittime
     *
     * @return string 
     */
    public function getSubmittime()
    {
        return $this->submittime;
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
     * Set actual
     *
     * @param \Acme\MainBundle\Entity\SurveyNumber $actual
     * @return Recap
     */
    public function setActual(\Acme\MainBundle\Entity\SurveyNumber $actual = null)
    {
        $this->actual = $actual;

        return $this;
    }

    /**
     * Get actual
     *
     * @return \Acme\MainBundle\Entity\SurveyNumber 
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Set planned
     *
     * @param \Acme\MainBundle\Entity\SurveyNumber $planned
     * @return Recap
     */
    public function setPlanned(\Acme\MainBundle\Entity\SurveyNumber $planned = null)
    {
        $this->planned = $planned;

        return $this;
    }

    /**
     * Get planned
     *
     * @return \Acme\MainBundle\Entity\SurveyNumber 
     */
    public function getPlanned()
    {
        return $this->planned;
    }

    /**
     * Set user
     *
     * @param \Acme\MainBundle\Entity\User $user
     * @return Recap
     */
    public function setUser(\Acme\MainBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\MainBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set infomations
     *
     * @param \Acme\MainBundle\Entity\Infomation $infomations
     * @return Recap
     */
    public function setInfomations(\Acme\MainBundle\Entity\Infomation $infomations = null)
    {
        $this->infomations = $infomations;

        return $this;
    }

    /**
     * Get infomations
     *
     * @return \Acme\MainBundle\Entity\Infomation 
     */
    public function getInfomations()
    {
        return $this->infomations;
    }

    /**
     * Set customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     * @return Recap
     */
    public function setCustomwave(\Acme\MainBundle\Entity\Customwave $customwave = null)
    {
        $this->customwave = $customwave;

        return $this;
    }

    /**
     * Get customwave
     *
     * @return \Acme\MainBundle\Entity\Customwave 
     */
    public function getCustomwave()
    {
        return $this->customwave;
    }

    /**
     * Add country
     *
     * @param \Acme\MainBundle\Entity\Country $country
     * @return Recap
     */
    public function addCountry(\Acme\MainBundle\Entity\Country $country)
    {
        $this->country[] = $country;

        return $this;
    }

    /**
     * Remove country
     *
     * @param \Acme\MainBundle\Entity\Country $country
     */
    public function removeCountry(\Acme\MainBundle\Entity\Country $country)
    {
        $this->country->removeElement($country);
    }

    /**
     * Get country
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add aolquestionnaire
     *
     * @param \Acme\MainBundle\Entity\Aolquestionnaire $aolquestionnaire
     * @return Recap
     */
    public function addAolquestionnaire(\Acme\MainBundle\Entity\Aolquestionnaire $aolquestionnaire)
    {
        $this->aolquestionnaire[] = $aolquestionnaire;

        return $this;
    }

    /**
     * Remove aolquestionnaire
     *
     * @param \Acme\MainBundle\Entity\Aolquestionnaire $aolquestionnaire
     */
    public function removeAolquestionnaire(\Acme\MainBundle\Entity\Aolquestionnaire $aolquestionnaire)
    {
        $this->aolquestionnaire->removeElement($aolquestionnaire);
    }

    /**
     * Get aolquestionnaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAolquestionnaire()
    {
        return $this->aolquestionnaire;
    }
}
