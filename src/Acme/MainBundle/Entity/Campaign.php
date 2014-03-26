<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaign
 *
 * @ORM\Table(name="campaign", uniqueConstraints={@ORM\UniqueConstraint(name="name_uniq", columns={"name", "questionnaire_id"})}, indexes={@ORM\Index(name="IDX_1F1512DDCE07E8FF", columns={"questionnaire_id"})})
 * @ORM\Entity
 */
class Campaign
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
     * @var \Acme\MainBundle\Entity\Questionnaire
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Questionnaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questionnaire_id", referencedColumnName="id")
     * })
     */
    private $questionnaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Customwave", mappedBy="campaign")
     */
    private $customwave;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customwave = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Campaign
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
     * Set questionnaire
     *
     * @param \Acme\MainBundle\Entity\Questionnaire $questionnaire
     * @return Campaign
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
     * Add customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     * @return Campaign
     */
    public function addCustomwave(\Acme\MainBundle\Entity\Customwave $customwave)
    {
        $this->customwave[] = $customwave;

        return $this;
    }

    /**
     * Remove customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     */
    public function removeCustomwave(\Acme\MainBundle\Entity\Customwave $customwave)
    {
        $this->customwave->removeElement($customwave);
    }

    /**
     * Get customwave
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomwave()
    {
        return $this->customwave;
    }
}
