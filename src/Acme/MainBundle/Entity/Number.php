<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Number
 *
 * @ORM\Table(name="number", uniqueConstraints={@ORM\UniqueConstraint(name="date_status_uniq", columns={"date_id", "status_id"})}, indexes={@ORM\Index(name="IDX_96901F54B897366B", columns={"date_id"}), @ORM\Index(name="IDX_96901F546BF700BD", columns={"status_id"})})
 * @ORM\Entity
 */
class Number
{
    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="bigint", nullable=false)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Date
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Date")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="date_id", referencedColumnName="id")
     * })
     */
    private $date;

    /**
     * @var \Acme\MainBundle\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;



    /**
     * Set number
     *
     * @param integer $number
     * @return Number
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
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
     * Set date
     *
     * @param \Acme\MainBundle\Entity\Date $date
     * @return Number
     */
    public function setDate(\Acme\MainBundle\Entity\Date $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Acme\MainBundle\Entity\Date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param \Acme\MainBundle\Entity\Status $status
     * @return Number
     */
    public function setStatus(\Acme\MainBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Acme\MainBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
