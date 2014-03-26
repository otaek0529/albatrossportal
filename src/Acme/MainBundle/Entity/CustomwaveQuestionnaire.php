<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomwaveQuestionnaire
 *
 * @ORM\Table(name="customwave_questionnaire", indexes={@ORM\Index(name="IDX_1F74A9259FFD0DF", columns={"customwave_id"}), @ORM\Index(name="IDX_1F74A92CE07E8FF", columns={"questionnaire_id"})})
 * @ORM\Entity
 */
class CustomwaveQuestionnaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
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
     * @var \Acme\MainBundle\Entity\Customwave
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customwave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customwave_id", referencedColumnName="id")
     * })
     */
    private $customwave;



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
     * @return CustomwaveQuestionnaire
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
     * Set customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     * @return CustomwaveQuestionnaire
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
