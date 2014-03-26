<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operationquestionnaire
 *
 * @ORM\Table(name="operationquestionnaire", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_B466A60AF639F774", columns={"campaign_id"})}, indexes={@ORM\Index(name="IDX_B466A60ACE07E8FF", columns={"questionnaire_id"})})
 * @ORM\Entity
 */
class Operationquestionnaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="fwsdate", type="string", length=20, nullable=true)
     */
    private $fwsdate;

    /**
     * @var string
     *
     * @ORM\Column(name="fwedate", type="string", length=20, nullable=true)
     */
    private $fwedate;

    /**
     * @var string
     *
     * @ORM\Column(name="reportdate", type="string", length=20, nullable=true)
     */
    private $reportdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="survey_num", type="bigint", nullable=false)
     */
    private $surveyNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="assigned_num", type="bigint", nullable=false)
     */
    private $assignedNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="fw_num", type="bigint", nullable=false)
     */
    private $fwNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="editing_num", type="bigint", nullable=false)
     */
    private $editingNum;

    /**
     * @var string
     *
     * @ORM\Column(name="first_visit_date", type="string", length=20, nullable=false)
     */
    private $firstVisitDate;

    /**
     * @var string
     *
     * @ORM\Column(name="last_visit_date", type="string", length=20, nullable=false)
     */
    private $lastVisitDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="info_type", type="integer", nullable=true)
     */
    private $infoType;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_date", type="string", length=20, nullable=false)
     */
    private $modifiedDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="qid", type="integer", nullable=true)
     */
    private $qid;

    /**
     * @var integer
     *
     * @ORM\Column(name="campid", type="integer", nullable=true)
     */
    private $campid;

    /**
     * @var string
     *
     * @ORM\Column(name="questionnaire_name", type="string", length=255, nullable=true)
     */
    private $questionnaireName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Questionnaire
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Questionnaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questionnaire_id", referencedColumnName="id")
     * })
     */
    private $questionnaire;

    /**
     * @var \Acme\MainBundle\Entity\Campaign
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Campaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */
    private $campaign;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Customclient", inversedBy="operationquestionnaire")
     * @ORM\JoinTable(name="operationquestionnaire_customclient",
     *   joinColumns={
     *     @ORM\JoinColumn(name="operationquestionnaire_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="customclient_id", referencedColumnName="id")
     *   }
     * )
     */
    private $customclient;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Bu", inversedBy="operationquestionnaire")
     * @ORM\JoinTable(name="operationquestionnaire_bu",
     *   joinColumns={
     *     @ORM\JoinColumn(name="operationquestionnaire_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="bu_id", referencedColumnName="id")
     *   }
     * )
     */
    private $bu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Country", inversedBy="operationquestionnaire")
     * @ORM\JoinTable(name="operationquestionnaire_country",
     *   joinColumns={
     *     @ORM\JoinColumn(name="operationquestionnaire_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     *   }
     * )
     */
    private $country;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customclient = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bu = new \Doctrine\Common\Collections\ArrayCollection();
        $this->country = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set fwsdate
     *
     * @param string $fwsdate
     * @return Operationquestionnaire
     */
    public function setFwsdate($fwsdate)
    {
        $this->fwsdate = $fwsdate;

        return $this;
    }

    /**
     * Get fwsdate
     *
     * @return string 
     */
    public function getFwsdate()
    {
        return $this->fwsdate;
    }

    /**
     * Set fwedate
     *
     * @param string $fwedate
     * @return Operationquestionnaire
     */
    public function setFwedate($fwedate)
    {
        $this->fwedate = $fwedate;

        return $this;
    }

    /**
     * Get fwedate
     *
     * @return string 
     */
    public function getFwedate()
    {
        return $this->fwedate;
    }

    /**
     * Set reportdate
     *
     * @param string $reportdate
     * @return Operationquestionnaire
     */
    public function setReportdate($reportdate)
    {
        $this->reportdate = $reportdate;

        return $this;
    }

    /**
     * Get reportdate
     *
     * @return string 
     */
    public function getReportdate()
    {
        return $this->reportdate;
    }

    /**
     * Set surveyNum
     *
     * @param integer $surveyNum
     * @return Operationquestionnaire
     */
    public function setSurveyNum($surveyNum)
    {
        $this->surveyNum = $surveyNum;

        return $this;
    }

    /**
     * Get surveyNum
     *
     * @return integer 
     */
    public function getSurveyNum()
    {
        return $this->surveyNum;
    }

    /**
     * Set assignedNum
     *
     * @param integer $assignedNum
     * @return Operationquestionnaire
     */
    public function setAssignedNum($assignedNum)
    {
        $this->assignedNum = $assignedNum;

        return $this;
    }

    /**
     * Get assignedNum
     *
     * @return integer 
     */
    public function getAssignedNum()
    {
        return $this->assignedNum;
    }

    /**
     * Set fwNum
     *
     * @param integer $fwNum
     * @return Operationquestionnaire
     */
    public function setFwNum($fwNum)
    {
        $this->fwNum = $fwNum;

        return $this;
    }

    /**
     * Get fwNum
     *
     * @return integer 
     */
    public function getFwNum()
    {
        return $this->fwNum;
    }

    /**
     * Set editingNum
     *
     * @param integer $editingNum
     * @return Operationquestionnaire
     */
    public function setEditingNum($editingNum)
    {
        $this->editingNum = $editingNum;

        return $this;
    }

    /**
     * Get editingNum
     *
     * @return integer 
     */
    public function getEditingNum()
    {
        return $this->editingNum;
    }

    /**
     * Set firstVisitDate
     *
     * @param string $firstVisitDate
     * @return Operationquestionnaire
     */
    public function setFirstVisitDate($firstVisitDate)
    {
        $this->firstVisitDate = $firstVisitDate;

        return $this;
    }

    /**
     * Get firstVisitDate
     *
     * @return string 
     */
    public function getFirstVisitDate()
    {
        return $this->firstVisitDate;
    }

    /**
     * Set lastVisitDate
     *
     * @param string $lastVisitDate
     * @return Operationquestionnaire
     */
    public function setLastVisitDate($lastVisitDate)
    {
        $this->lastVisitDate = $lastVisitDate;

        return $this;
    }

    /**
     * Get lastVisitDate
     *
     * @return string 
     */
    public function getLastVisitDate()
    {
        return $this->lastVisitDate;
    }

    /**
     * Set infoType
     *
     * @param integer $infoType
     * @return Operationquestionnaire
     */
    public function setInfoType($infoType)
    {
        $this->infoType = $infoType;

        return $this;
    }

    /**
     * Get infoType
     *
     * @return integer 
     */
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * Set modifiedDate
     *
     * @param string $modifiedDate
     * @return Operationquestionnaire
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return string 
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set qid
     *
     * @param integer $qid
     * @return Operationquestionnaire
     */
    public function setQid($qid)
    {
        $this->qid = $qid;

        return $this;
    }

    /**
     * Get qid
     *
     * @return integer 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set campid
     *
     * @param integer $campid
     * @return Operationquestionnaire
     */
    public function setCampid($campid)
    {
        $this->campid = $campid;

        return $this;
    }

    /**
     * Get campid
     *
     * @return integer 
     */
    public function getCampid()
    {
        return $this->campid;
    }

    /**
     * Set questionnaireName
     *
     * @param string $questionnaireName
     * @return Operationquestionnaire
     */
    public function setQuestionnaireName($questionnaireName)
    {
        $this->questionnaireName = $questionnaireName;

        return $this;
    }

    /**
     * Get questionnaireName
     *
     * @return string 
     */
    public function getQuestionnaireName()
    {
        return $this->questionnaireName;
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
     * Set questionnaire
     *
     * @param \Acme\MainBundle\Entity\Questionnaire $questionnaire
     * @return Operationquestionnaire
     */
    public function setQuestionnaire(\Acme\MainBundle\Entity\Questionnaire $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \Acme\MainBundle\Entity\Questionnaire 
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Set campaign
     *
     * @param \Acme\MainBundle\Entity\Campaign $campaign
     * @return Operationquestionnaire
     */
    public function setCampaign(\Acme\MainBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \Acme\MainBundle\Entity\Campaign 
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Add customclient
     *
     * @param \Acme\MainBundle\Entity\Customclient $customclient
     * @return Operationquestionnaire
     */
    public function addCustomclient(\Acme\MainBundle\Entity\Customclient $customclient)
    {
        $this->customclient[] = $customclient;

        return $this;
    }

    /**
     * Remove customclient
     *
     * @param \Acme\MainBundle\Entity\Customclient $customclient
     */
    public function removeCustomclient(\Acme\MainBundle\Entity\Customclient $customclient)
    {
        $this->customclient->removeElement($customclient);
    }

    /**
     * Get customclient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomclient()
    {
        return $this->customclient;
    }

    /**
     * Add bu
     *
     * @param \Acme\MainBundle\Entity\Bu $bu
     * @return Operationquestionnaire
     */
    public function addBu(\Acme\MainBundle\Entity\Bu $bu)
    {
        $this->bu[] = $bu;

        return $this;
    }

    /**
     * Remove bu
     *
     * @param \Acme\MainBundle\Entity\Bu $bu
     */
    public function removeBu(\Acme\MainBundle\Entity\Bu $bu)
    {
        $this->bu->removeElement($bu);
    }

    /**
     * Get bu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBu()
    {
        return $this->bu;
    }

    /**
     * Add country
     *
     * @param \Acme\MainBundle\Entity\Country $country
     * @return Operationquestionnaire
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
}
