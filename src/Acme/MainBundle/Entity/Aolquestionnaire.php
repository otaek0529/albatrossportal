<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aolquestionnaire
 *
 * @ORM\Table(name="aolquestionnaire", indexes={@ORM\Index(name="IDX_C3DEC41437268F00", columns={"customfield_id"})})
 * @ORM\Entity
 */
class Aolquestionnaire 
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
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
     * @var \Acme\MainBundle\Entity\Customfield
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customfield")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customfield_id", referencedColumnName="id")
     * })
     */
    private $customfield;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Recap", inversedBy="aolquestionnaire")
     * @ORM\JoinTable(name="aolquestionnaire_recap",
     *   joinColumns={
     *     @ORM\JoinColumn(name="aolquestionnaire_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="recap_id", referencedColumnName="id")
     *   }
     * )
     */
    private $recap;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recap = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Aolquestionnaire
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
     * Set customfield
     *
     * @param \Acme\MainBundle\Entity\Customfield $customfield
     * @return Aolquestionnaire
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

    /**
     * Add recap
     *
     * @param \Acme\MainBundle\Entity\Recap $recap
     * @return Aolquestionnaire
     */
    public function addRecap(\Acme\MainBundle\Entity\Recap $recap)
    {
        $this->recap[] = $recap;

        return $this;
    }

    /**
     * Remove recap
     *
     * @param \Acme\MainBundle\Entity\Recap $recap
     */
    public function removeRecap(\Acme\MainBundle\Entity\Recap $recap)
    {
        $this->recap->removeElement($recap);
    }

    /**
     * Get recap
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecap()
    {
        return $this->recap;
    }
}
