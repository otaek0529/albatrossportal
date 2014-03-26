<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attendees
 *
 * @ORM\Table(name="attendees", indexes={@ORM\Index(name="IDX_C8C96B2537268F00", columns={"customfield_id"})})
 * @ORM\Entity
 */
class Attendees
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=true)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="albatross_attendees", type="boolean", nullable=true)
     */
    private $albatrossAttendees;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Customfield
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customfield")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customfield_id", referencedColumnName="id")
     * })
     */
    private $customfield;



    /**
     * Set name
     *
     * @param string $name
     * @return Attendees
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
     * Set position
     *
     * @param string $position
     * @return Attendees
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set albatrossAttendees
     *
     * @param boolean $albatrossAttendees
     * @return Attendees
     */
    public function setAlbatrossAttendees($albatrossAttendees)
    {
        $this->albatrossAttendees = $albatrossAttendees;

        return $this;
    }

    /**
     * Get albatrossAttendees
     *
     * @return boolean 
     */
    public function getAlbatrossAttendees()
    {
        return $this->albatrossAttendees;
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
     * Set customfield
     *
     * @param \Acme\MainBundle\Entity\Customfield $customfield
     * @return Attendees
     */
    public function setCustomfield(\Acme\MainBundle\Entity\Customfield $customfield = null)
    {
        $this->customfield = $customfield;

        return $this;
    }

    /**
     * Get customfield
     *
     * @return \Acme\MainBundle\Entity\Customfield 
     */
    public function getCustomfield()
    {
        return $this->customfield;
    }
}
