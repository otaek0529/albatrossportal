<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customiof
 *
 * @ORM\Table(name="customiof", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_7B09BD1111CBC927", columns={"customproject_id"})})
 * @ORM\Entity
 */
class Customiof
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
     * Set name
     *
     * @param string $name
     * @return Customiof
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
     * @return Customiof
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
}
