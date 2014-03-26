<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customproject
 *
 * @ORM\Table(name="customproject", indexes={@ORM\Index(name="IDX_5153A89CD2F9CB25", columns={"customclient_id"})})
 * @ORM\Entity
 */
class Customproject
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
     * @ORM\Column(name="scope", type="bigint", nullable=false)
     */
    private $scope;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="bigint", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Customclient
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Customclient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customclient_id", referencedColumnName="id")
     * })
     */
    private $customclient;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\User", mappedBy="customproject")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Customproject
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
     * Set scope
     *
     * @param integer $scope
     * @return Customproject
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return integer 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Customproject
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
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
     * Set customclient
     *
     * @param \Acme\MainBundle\Entity\Customclient $customclient
     * @return Customproject
     */
    public function setCustomclient(\Acme\MainBundle\Entity\Customclient $customclient = null)
    {
        $this->customclient = $customclient;

        return $this;
    }

    /**
     * Get customclient
     *
     * @return \Acme\MainBundle\Entity\Customclient 
     */
    public function getCustomclient()
    {
        return $this->customclient;
    }

    /**
     * Add user
     *
     * @param \Acme\MainBundle\Entity\User $user
     * @return Customproject
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
}
