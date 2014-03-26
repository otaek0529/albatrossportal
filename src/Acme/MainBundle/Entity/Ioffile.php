<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ioffile
 *
 * @ORM\Table(name="ioffile", indexes={@ORM\Index(name="IDX_C14900269D1F836B", columns={"attachments_id"}), @ORM\Index(name="IDX_C1490026D4454269", columns={"iofmessage_id"})})
 * @ORM\Entity
 */
class Ioffile
{
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
     * @ORM\Column(name="formindex", type="bigint", nullable=false)
     */
    private $formindex;

    /**
     * @var string
     *
     * @ORM\Column(name="formindex2", type="string", length=20, nullable=false)
     */
    private $formindex2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Iofmessage
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Iofmessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iofmessage_id", referencedColumnName="id")
     * })
     */
    private $iofmessage;

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
     * Set label
     *
     * @param string $label
     * @return Ioffile
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
     * @return Ioffile
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
     * Set formindex
     *
     * @param integer $formindex
     * @return Ioffile
     */
    public function setFormindex($formindex)
    {
        $this->formindex = $formindex;

        return $this;
    }

    /**
     * Get formindex
     *
     * @return integer 
     */
    public function getFormindex()
    {
        return $this->formindex;
    }

    /**
     * Set formindex2
     *
     * @param string $formindex2
     * @return Ioffile
     */
    public function setFormindex2($formindex2)
    {
        $this->formindex2 = $formindex2;

        return $this;
    }

    /**
     * Get formindex2
     *
     * @return string 
     */
    public function getFormindex2()
    {
        return $this->formindex2;
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
     * Set iofmessage
     *
     * @param \Acme\MainBundle\Entity\Iofmessage $iofmessage
     * @return Ioffile
     */
    public function setIofmessage(\Acme\MainBundle\Entity\Iofmessage $iofmessage = null)
    {
        $this->iofmessage = $iofmessage;

        return $this;
    }

    /**
     * Get iofmessage
     *
     * @return \Acme\MainBundle\Entity\Iofmessage 
     */
    public function getIofmessage()
    {
        return $this->iofmessage;
    }

    /**
     * Set attachments
     *
     * @param \Acme\MainBundle\Entity\Attachments $attachments
     * @return Ioffile
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
}
