<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customwave
 *
 * @ORM\Table(name="customwave", indexes={@ORM\Index(name="IDX_3AD64F3211CBC927", columns={"customproject_id"})})
 * @ORM\Entity
 */
class Customwave
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="wavenum", type="bigint", nullable=false)
     */
    private $wavenum;

    /**
     * @var string
     *
     * @ORM\Column(name="bis", type="string", length=20, nullable=true)
     */
    private $bis;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=20, nullable=true)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="bigint", nullable=true)
     */
    private $month;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalnum", type="bigint", nullable=true)
     */
    private $totalnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Customproject
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customproject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customproject_id", referencedColumnName="id")
     * })
     */
    private $customproject;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Questionnaire", mappedBy="customwave")
     */
    private $questionnaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Campaign", inversedBy="customwave")
     * @ORM\JoinTable(name="customwave_campaign",
     *   joinColumns={
     *     @ORM\JoinColumn(name="customwave_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     *   }
     * )
     */
    private $campaign;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questionnaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->campaign = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Customwave
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
     * Set wavenum
     *
     * @param integer $wavenum
     * @return Customwave
     */
    public function setWavenum($wavenum)
    {
        $this->wavenum = $wavenum;

        return $this;
    }

    /**
     * Get wavenum
     *
     * @return integer 
     */
    public function getWavenum()
    {
        return $this->wavenum;
    }

    /**
     * Set bis
     *
     * @param string $bis
     * @return Customwave
     */
    public function setBis($bis)
    {
        $this->bis = $bis;

        return $this;
    }

    /**
     * Get bis
     *
     * @return string 
     */
    public function getBis()
    {
        return $this->bis;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return Customwave
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param integer $month
     * @return Customwave
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer 
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set totalnum
     *
     * @param integer $totalnum
     * @return Customwave
     */
    public function setTotalnum($totalnum)
    {
        $this->totalnum = $totalnum;

        return $this;
    }

    /**
     * Get totalnum
     *
     * @return integer 
     */
    public function getTotalnum()
    {
        return $this->totalnum;
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
     * Set customproject
     *
     * @param \Acme\MainBundle\Entity\Customproject $customproject
     * @return Customwave
     */
    public function setCustomproject(\Acme\MainBundle\Entity\Customproject $customproject = null)
    {
        $this->customproject = $customproject;

        return $this;
    }

    /**
     * Get customproject
     *
     * @return \Acme\MainBundle\Entity\Customproject 
     */
    public function getCustomproject()
    {
        return $this->customproject;
    }

    /**
     * Add questionnaire
     *
     * @param \Acme\MainBundle\Entity\Questionnaire $questionnaire
     * @return Customwave
     */
    public function addQuestionnaire(\Acme\MainBundle\Entity\Questionnaire $questionnaire)
    {
        $this->questionnaire[] = $questionnaire;

        return $this;
    }

    /**
     * Remove questionnaire
     *
     * @param \Acme\MainBundle\Entity\Questionnaire $questionnaire
     */
    public function removeQuestionnaire(\Acme\MainBundle\Entity\Questionnaire $questionnaire)
    {
        $this->questionnaire->removeElement($questionnaire);
    }

    /**
     * Get questionnaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Add campaign
     *
     * @param \Acme\MainBundle\Entity\Campaign $campaign
     * @return Customwave
     */
    public function addCampaign(\Acme\MainBundle\Entity\Campaign $campaign)
    {
        $this->campaign[] = $campaign;

        return $this;
    }

    /**
     * Remove campaign
     *
     * @param \Acme\MainBundle\Entity\Campaign $campaign
     */
    public function removeCampaign(\Acme\MainBundle\Entity\Campaign $campaign)
    {
        $this->campaign->removeElement($campaign);
    }

    /**
     * Get campaign
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCampaign()
    {
        return $this->campaign;
    }
}
