<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachments
 *
 * @ORM\Table(name="attachments", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_47C4FAD659FFD0DF", columns={"customwave_id"})}, indexes={@ORM\Index(name="IDX_47C4FAD6A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_47C4FAD6727ACA70", columns={"parent_id"}), @ORM\Index(name="IDX_47C4FAD61BB0FD11", columns={"filesection_id"})})
 * @ORM\Entity
 */
class Attachments
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitteddate", type="datetime", nullable=false)
     */
    private $submitteddate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="children", type="boolean", nullable=true)
     */
    private $children;

    /**
     * @var string
     *
     * @ORM\Column(name="submitby", type="string", length=20, nullable=true)
     */
    private $submitby;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Acme\MainBundle\Entity\Attachments
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Attachments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

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
     * @var \Acme\MainBundle\Entity\Filesection
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Filesection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filesection_id", referencedColumnName="id")
     * })
     */
    private $filesection;



    /**
     * Set type
     *
     * @param string $type
     * @return Attachments
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
     * Set status
     *
     * @param string $status
     * @return Attachments
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set submitteddate
     *
     * @param \DateTime $submitteddate
     * @return Attachments
     */
    public function setSubmitteddate($submitteddate)
    {
        $this->submitteddate = $submitteddate;

        return $this;
    }

    /**
     * Get submitteddate
     *
     * @return \DateTime 
     */
    public function getSubmitteddate()
    {
        return $this->submitteddate;
    }

    /**
     * Set children
     *
     * @param boolean $children
     * @return Attachments
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Get children
     *
     * @return boolean 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set submitby
     *
     * @param string $submitby
     * @return Attachments
     */
    public function setSubmitby($submitby)
    {
        $this->submitby = $submitby;

        return $this;
    }

    /**
     * Get submitby
     *
     * @return string 
     */
    public function getSubmitby()
    {
        return $this->submitby;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Attachments
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Attachments
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
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
     * Set user
     *
     * @param \Acme\MainBundle\Entity\User $user
     * @return Attachments
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
     * Set parent
     *
     * @param \Acme\MainBundle\Entity\Attachments $parent
     * @return Attachments
     */
    public function setParent(\Acme\MainBundle\Entity\Attachments $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Acme\MainBundle\Entity\Attachments 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     * @return Attachments
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
     * Set filesection
     *
     * @param \Acme\MainBundle\Entity\Filesection $filesection
     * @return Attachments
     */
    public function setFilesection(\Acme\MainBundle\Entity\Filesection $filesection = null)
    {
        $this->filesection = $filesection;

        return $this;
    }

    /**
     * Get filesection
     *
     * @return \Acme\MainBundle\Entity\Filesection 
     */
    public function getFilesection()
    {
        return $this->filesection;
    }
}
