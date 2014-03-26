<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aolsurvey
 *
 * @ORM\Table(name="aolsurvey", uniqueConstraints={@ORM\UniqueConstraint(name="surveyinstanceid_uniq", columns={"survey_instance_id"}), @ORM\UniqueConstraint(name="UNIQ_F4512F903B025C87", columns={"billing_id"})}, indexes={@ORM\Index(name="IDX_F4512F90F639F774", columns={"campaign_id"}), @ORM\Index(name="IDX_F4512F902C7C2CBA", columns={"workflow_id"}), @ORM\Index(name="IDX_F4512F9064D218E", columns={"location_id"})})
 * @ORM\Entity
 */
class Aolsurvey
{
    /**
     * @var integer
     *
     * @ORM\Column(name="survey_instance_id", type="bigint", nullable=false)
     */
    private $surveyInstanceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rfas_open", type="bigint", nullable=false)
     */
    private $rfasOpen;

    /**
     * @var integer
     *
     * @ORM\Column(name="rfas_closed", type="bigint", nullable=false)
     */
    private $rfasClosed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_returned_to_shopper", type="boolean", nullable=false)
     */
    private $isReturnedToShopper;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_no_decline", type="boolean", nullable=false)
     */
    private $isNoDecline;

    /**
     * @var string
     *
     * @ORM\Column(name="survey_status_name", type="string", length=255, nullable=false)
     */
    private $surveyStatusName;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255, nullable=false)
     */
    private $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submit_time", type="datetime", nullable=false)
     */
    private $submitTime;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_box_name", type="string", length=255, nullable=true)
     */
    private $mailBoxName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Acme\MainBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     * })
     */
    private $location;

    /**
     * @var \Acme\MainBundle\Entity\Billing
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Billing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_id", referencedColumnName="id")
     * })
     */
    private $billing;

    /**
     * @var \Acme\MainBundle\Entity\Workflow
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Workflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workflow_id", referencedColumnName="id")
     * })
     */
    private $workflow;



    /**
     * Set surveyInstanceId
     *
     * @param integer $surveyInstanceId
     * @return Aolsurvey
     */
    public function setSurveyInstanceId($surveyInstanceId)
    {
        $this->surveyInstanceId = $surveyInstanceId;

        return $this;
    }

    /**
     * Get surveyInstanceId
     *
     * @return integer 
     */
    public function getSurveyInstanceId()
    {
        return $this->surveyInstanceId;
    }

    /**
     * Set rfasOpen
     *
     * @param integer $rfasOpen
     * @return Aolsurvey
     */
    public function setRfasOpen($rfasOpen)
    {
        $this->rfasOpen = $rfasOpen;

        return $this;
    }

    /**
     * Get rfasOpen
     *
     * @return integer 
     */
    public function getRfasOpen()
    {
        return $this->rfasOpen;
    }

    /**
     * Set rfasClosed
     *
     * @param integer $rfasClosed
     * @return Aolsurvey
     */
    public function setRfasClosed($rfasClosed)
    {
        $this->rfasClosed = $rfasClosed;

        return $this;
    }

    /**
     * Get rfasClosed
     *
     * @return integer 
     */
    public function getRfasClosed()
    {
        return $this->rfasClosed;
    }

    /**
     * Set isReturnedToShopper
     *
     * @param boolean $isReturnedToShopper
     * @return Aolsurvey
     */
    public function setIsReturnedToShopper($isReturnedToShopper)
    {
        $this->isReturnedToShopper = $isReturnedToShopper;

        return $this;
    }

    /**
     * Get isReturnedToShopper
     *
     * @return boolean 
     */
    public function getIsReturnedToShopper()
    {
        return $this->isReturnedToShopper;
    }

    /**
     * Set isNoDecline
     *
     * @param boolean $isNoDecline
     * @return Aolsurvey
     */
    public function setIsNoDecline($isNoDecline)
    {
        $this->isNoDecline = $isNoDecline;

        return $this;
    }

    /**
     * Get isNoDecline
     *
     * @return boolean 
     */
    public function getIsNoDecline()
    {
        return $this->isNoDecline;
    }

    /**
     * Set surveyStatusName
     *
     * @param string $surveyStatusName
     * @return Aolsurvey
     */
    public function setSurveyStatusName($surveyStatusName)
    {
        $this->surveyStatusName = $surveyStatusName;

        return $this;
    }

    /**
     * Get surveyStatusName
     *
     * @return string 
     */
    public function getSurveyStatusName()
    {
        return $this->surveyStatusName;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Aolsurvey
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return Aolsurvey
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set submitTime
     *
     * @param \DateTime $submitTime
     * @return Aolsurvey
     */
    public function setSubmitTime($submitTime)
    {
        $this->submitTime = $submitTime;

        return $this;
    }

    /**
     * Get submitTime
     *
     * @return \DateTime 
     */
    public function getSubmitTime()
    {
        return $this->submitTime;
    }

    /**
     * Set mailBoxName
     *
     * @param string $mailBoxName
     * @return Aolsurvey
     */
    public function setMailBoxName($mailBoxName)
    {
        $this->mailBoxName = $mailBoxName;

        return $this;
    }

    /**
     * Get mailBoxName
     *
     * @return string 
     */
    public function getMailBoxName()
    {
        return $this->mailBoxName;
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
     * Set campaign
     *
     * @param \Acme\MainBundle\Entity\Campaign $campaign
     * @return Aolsurvey
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
     * Set location
     *
     * @param \Acme\MainBundle\Entity\Location $location
     * @return Aolsurvey
     */
    public function setLocation(\Acme\MainBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Acme\MainBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set billing
     *
     * @param \Acme\MainBundle\Entity\Billing $billing
     * @return Aolsurvey
     */
    public function setBilling(\Acme\MainBundle\Entity\Billing $billing = null)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * Get billing
     *
     * @return \Acme\MainBundle\Entity\Billing 
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Set workflow
     *
     * @param \Acme\MainBundle\Entity\Workflow $workflow
     * @return Aolsurvey
     */
    public function setWorkflow(\Acme\MainBundle\Entity\Workflow $workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * Get workflow
     *
     * @return \Acme\MainBundle\Entity\Workflow 
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }
}
