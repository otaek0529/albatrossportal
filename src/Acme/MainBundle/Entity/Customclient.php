<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customclient
 *
 * @ORM\Table(name="customclient", uniqueConstraints={@ORM\UniqueConstraint(name="name_uniq", columns={"name"})}, indexes={@ORM\Index(name="IDX_8E7110A0D8217C47", columns={"clientgroup_id"})})
 * @ORM\Entity
 */
class Customclient
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Clientgroup
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Clientgroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientgroup_id", referencedColumnName="id")
     * })
     */
    private $clientgroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\User", mappedBy="customclient")
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Operationquestionnaire", mappedBy="customclient")
     */
    private $operationquestionnaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operationquestionnaire = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Customclient
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
     * Set logo
     *
     * @param string $logo
     * @return Customclient
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
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
     * Set clientgroup
     *
     * @param \Acme\MainBundle\Entity\Clientgroup $clientgroup
     * @return Customclient
     */
    public function setClientgroup(\Acme\MainBundle\Entity\Clientgroup $clientgroup = null)
    {
        $this->clientgroup = $clientgroup;

        return $this;
    }

    /**
     * Get clientgroup
     *
     * @return \Acme\MainBundle\Entity\Clientgroup 
     */
    public function getClientgroup()
    {
        return $this->clientgroup;
    }

    /**
     * Add user
     *
     * @param \Acme\MainBundle\Entity\User $user
     * @return Customclient
     */
    public function addUser(\Acme\MainBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Acme\MainBundle\Entity\User $user
     */
    public function removeUser(\Acme\MainBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add operationquestionnaire
     *
     * @param \Acme\MainBundle\Entity\Operationquestionnaire $operationquestionnaire
     * @return Customclient
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
