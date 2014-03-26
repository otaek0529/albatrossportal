<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country", uniqueConstraints={@ORM\UniqueConstraint(name="code_uniq", columns={"code"})}, indexes={@ORM\Index(name="IDX_5373C96621F0B0B8", columns={"Bu_id"})})
 * @ORM\Entity
 */
class Country
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
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

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
     *   @ORM\JoinColumn(name="Bu_id", referencedColumnName="id")
     * })
     */
    private $bu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Rules", mappedBy="country")
     */
    private $rules;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Recap", mappedBy="country")
     */
    private $recap;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Operationproject", mappedBy="country")
     */
    private $operationproject;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Customfield", mappedBy="country")
     */
    private $customfield;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Operationquestionnaire", mappedBy="country")
     */
    private $operationquestionnaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recap = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operationproject = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customfield = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operationquestionnaire = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Country
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
     * Set code
     *
     * @param string $code
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
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
     * @return Country
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
     * Add rules
     *
     * @param \Acme\MainBundle\Entity\Rules $rules
     * @return Country
     */
    public function addRule(\Acme\MainBundle\Entity\Rules $rules)
    {
        $this->rules[] = $rules;

        return $this;
    }

    /**
     * Remove rules
     *
     * @param \Acme\MainBundle\Entity\Rules $rules
     */
    public function removeRule(\Acme\MainBundle\Entity\Rules $rules)
    {
        $this->rules->removeElement($rules);
    }

    /**
     * Get rules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Add recap
     *
     * @param \Acme\MainBundle\Entity\Recap $recap
     * @return Country
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

    /**
     * Add operationproject
     *
     * @param \Acme\MainBundle\Entity\Operationproject $operationproject
     * @return Country
     */
    public function addOperationproject(\Acme\MainBundle\Entity\Operationproject $operationproject)
    {
        $this->operationproject[] = $operationproject;

        return $this;
    }

    /**
     * Remove operationproject
     *
     * @param \Acme\MainBundle\Entity\Operationproject $operationproject
     */
    public function removeOperationproject(\Acme\MainBundle\Entity\Operationproject $operationproject)
    {
        $this->operationproject->removeElement($operationproject);
    }

    /**
     * Get operationproject
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperationproject()
    {
        return $this->operationproject;
    }

    /**
     * Add customfield
     *
     * @param \Acme\MainBundle\Entity\Customfield $customfield
     * @return Country
     */
    public function addCustomfield(\Acme\MainBundle\Entity\Customfield $customfield)
    {
        $this->customfield[] = $customfield;

        return $this;
    }

    /**
     * Remove customfield
     *
     * @param \Acme\MainBundle\Entity\Customfield $customfield
     */
    public function removeCustomfield(\Acme\MainBundle\Entity\Customfield $customfield)
    {
        $this->customfield->removeElement($customfield);
    }

    /**
     * Get customfield
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomfield()
    {
        return $this->customfield;
    }

    /**
     * Add operationquestionnaire
     *
     * @param \Acme\MainBundle\Entity\Operationquestionnaire $operationquestionnaire
     * @return Country
     */
    public function addOperationquestionnaire(\Acme\MainBundle\Entity\Operationquestionnaire $operationquestionnaire)
    {
        $this->operationquestionnaire[] = $operationquestionnaire;

        return $this;
    }

    /**
     * Remove operationquestionnaire
     *
     * @param \Acme\MainBundle\Entity\Operationquestionnaire $operationquestionnaire
     */
    public function removeOperationquestionnaire(\Acme\MainBundle\Entity\Operationquestionnaire $operationquestionnaire)
    {
        $this->operationquestionnaire->removeElement($operationquestionnaire);
    }

    /**
     * Get operationquestionnaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperationquestionnaire()
    {
        return $this->operationquestionnaire;
    }
}
