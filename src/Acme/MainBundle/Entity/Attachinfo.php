<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachinfo
 *
 * @ORM\Table(name="attachinfo", indexes={@ORM\Index(name="IDX_B8D4E2E99D1F836B", columns={"attachments_id"}), @ORM\Index(name="IDX_B8D4E2E9E0319FBC", columns={"bu_id"}), @ORM\Index(name="IDX_B8D4E2E9166D1F9C", columns={"project_id"})})
 * @ORM\Entity
 */
class Attachinfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="scope", type="bigint", nullable=true)
     */
    private $scope;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fw_start_date", type="date", nullable=true)
     */
    private $fwStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fw_end_date", type="date", nullable=true)
     */
    private $fwEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="report_due_date", type="date", nullable=true)
     */
    private $reportDueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="formindex", type="string", length=20, nullable=false)
     */
    private $formindex;

    /**
     * @var string
     *
     * @ORM\Column(name="report_due_date_text", type="string", length=255, nullable=true)
     */
    private $reportDueDateText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="report_type", type="boolean", nullable=false)
     */
    private $reportType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Bu
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Bu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bu_id", referencedColumnName="id")
     * })
     */
    private $bu;

    /**
     * @var \Acme\MainBundle\Entity\Attachments
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Attachments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attachments_id", referencedColumnName="id")
     * })
     */
    private $attachments;

    /**
     * @var \Acme\MainBundle\Entity\Project
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;



    /**
     * Set scope
     *
     * @param integer $scope
     * @return Attachinfo
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return integer 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set fwStartDate
     *
     * @param \DateTime $fwStartDate
     * @return Attachinfo
     */
    public function setFwStartDate($fwStartDate)
    {
        $this->fwStartDate = $fwStartDate;

        return $this;
    }

    /**
     * Get fwStartDate
     *
     * @return \DateTime 
     */
    public function getFwStartDate()
    {
        return $this->fwStartDate;
    }

    /**
     * Set fwEndDate
     *
     * @param \DateTime $fwEndDate
     * @return Attachinfo
     */
    public function setFwEndDate($fwEndDate)
    {
        $this->fwEndDate = $fwEndDate;

        return $this;
    }

    /**
     * Get fwEndDate
     *
     * @return \DateTime 
     */
    public function getFwEndDate()
    {
        return $this->fwEndDate;
    }

    /**
     * Set reportDueDate
     *
     * @param \DateTime $reportDueDate
     * @return Attachinfo
     */
    public function setReportDueDate($reportDueDate)
    {
        $this->reportDueDate = $reportDueDate;

        return $this;
    }

    /**
     * Get reportDueDate
     *
     * @return \DateTime 
     */
    public function getReportDueDate()
    {
        return $this->reportDueDate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Attachinfo
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set formindex
     *
     * @param string $formindex
     * @return Attachinfo
     */
    public function setFormindex($formindex)
    {
        $this->formindex = $formindex;

        return $this;
    }

    /**
     * Get formindex
     *
     * @return string 
     */
    public function getFormindex()
    {
        return $this->formindex;
    }

    /**
     * Set reportDueDateText
     *
     * @param string $reportDueDateText
     * @return Attachinfo
     */
    public function setReportDueDateText($reportDueDateText)
    {
        $this->reportDueDateText = $reportDueDateText;

        return $this;
    }

    /**
     * Get reportDueDateText
     *
     * @return string 
     */
    public function getReportDueDateText()
    {
        return $this->reportDueDateText;
    }

    /**
     * Set reportType
     *
     * @param boolean $reportType
     * @return Attachinfo
     */
    public function setReportType($reportType)
    {
        $this->reportType = $reportType;

        return $this;
    }

    /**
     * Get reportType
     *
     * @return boolean 
     */
    public function getReportType()
    {
        return $this->reportType;
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
     * Set bu
     *
     * @param \Acme\MainBundle\Entity\Bu $bu
     * @return Attachinfo
     */
    public function setBu(\Acme\MainBundle\Entity\Bu $bu = null)
    {
        $this->bu = $bu;

        return $this;
    }

    /**
     * Get bu
     *
     * @return \Acme\MainBundle\Entity\Bu 
     */
    public function getBu()
    {
        return $this->bu;
    }

    /**
     * Set attachments
     *
     * @param \Acme\MainBundle\Entity\Attachments $attachments
     * @return Attachinfo
     */
    public function setAttachments(\Acme\MainBundle\Entity\Attachments $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Get attachments
     *
     * @return \Acme\MainBundle\Entity\Attachments 
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set project
     *
     * @param \Acme\MainBundle\Entity\Project $project
     * @return Attachinfo
     */
    public function setProject(\Acme\MainBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Acme\MainBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
