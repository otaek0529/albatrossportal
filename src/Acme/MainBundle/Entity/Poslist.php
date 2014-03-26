<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poslist
 *
 * @ORM\Table(name="poslist", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_53580FC159FFD0DF", columns={"customwave_id"})})
 * @ORM\Entity
 */
class Poslist
{
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="submittime", type="string", length=255, nullable=true)
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
     * @var \Acme\MainBundle\Entity\Customwave
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customwave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customwave_id", referencedColumnName="id")
     * })
     */
    private $customwave;



    /**
     * Set path
     *
     * @param string $path
     * @return Poslist
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
     * Set submittime
     *
     * @param string $submittime
     * @return Poslist
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
     * Set customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     * @return Poslist
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
}
