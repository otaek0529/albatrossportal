<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username_uniq", columns={"username"}), @ORM\UniqueConstraint(name="email_uniq", columns={"email"})}, indexes={@ORM\Index(name="IDX_8D93D649FF3ED4A8", columns={"identity_id"}), @ORM\Index(name="IDX_8D93D649DD842E46", columns={"position_id"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="text", nullable=true)
     */
    private $pic;

    /**
     * @var string
     *
     * @ORM\Column(name="aol_username", type="string", length=64, nullable=true)
     */
    private $aolUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="aol_password", type="string", length=64, nullable=true)
     */
    private $aolPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="ace_username", type="string", length=64, nullable=true)
     */
    private $aceUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="ace_password", type="string", length=64, nullable=true)
     */
    private $acePassword;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=255, nullable=true)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="office_phone", type="string", length=255, nullable=true)
     */
    private $officePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="office_address", type="string", length=255, nullable=true)
     */
    private $officeAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="crm_username", type="string", length=64, nullable=true)
     */
    private $crmUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="crm_password", type="string", length=64, nullable=true)
     */
    private $crmPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="bigint", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=64, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\MainBundle\Entity\Position
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Position")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * })
     */
    private $position;

    /**
     * @var \Acme\MainBundle\Entity\Identity
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Identity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="identity_id", referencedColumnName="id")
     * })
     */
    private $identity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Customproject", inversedBy="user")
     * @ORM\JoinTable(name="user_customproject",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="customproject_id", referencedColumnName="id")
     *   }
     * )
     */
    private $customproject;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\MainBundle\Entity\Customclient", inversedBy="user")
     * @ORM\JoinTable(name="user_customclient",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="customclient_id", referencedColumnName="id")
     *   }
     * )
     */
    private $customclient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customproject = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customclient = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return User
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return User
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set aolUsername
     *
     * @param string $aolUsername
     * @return User
     */
    public function setAolUsername($aolUsername)
    {
        $this->aolUsername = $aolUsername;

        return $this;
    }

    /**
     * Get aolUsername
     *
     * @return string 
     */
    public function getAolUsername()
    {
        return $this->aolUsername;
    }

    /**
     * Set aolPassword
     *
     * @param string $aolPassword
     * @return User
     */
    public function setAolPassword($aolPassword)
    {
        $this->aolPassword = $aolPassword;

        return $this;
    }

    /**
     * Get aolPassword
     *
     * @return string 
     */
    public function getAolPassword()
    {
        return $this->aolPassword;
    }

    /**
     * Set aceUsername
     *
     * @param string $aceUsername
     * @return User
     */
    public function setAceUsername($aceUsername)
    {
        $this->aceUsername = $aceUsername;

        return $this;
    }

    /**
     * Get aceUsername
     *
     * @return string 
     */
    public function getAceUsername()
    {
        return $this->aceUsername;
    }

    /**
     * Set acePassword
     *
     * @param string $acePassword
     * @return User
     */
    public function setAcePassword($acePassword)
    {
        $this->acePassword = $acePassword;

        return $this;
    }

    /**
     * Get acePassword
     *
     * @return string 
     */
    public function getAcePassword()
    {
        return $this->acePassword;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return User
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return User
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return User
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set officePhone
     *
     * @param string $officePhone
     * @return User
     */
    public function setOfficePhone($officePhone)
    {
        $this->officePhone = $officePhone;

        return $this;
    }

    /**
     * Get officePhone
     *
     * @return string 
     */
    public function getOfficePhone()
    {
        return $this->officePhone;
    }

    /**
     * Set officeAddress
     *
     * @param string $officeAddress
     * @return User
     */
    public function setOfficeAddress($officeAddress)
    {
        $this->officeAddress = $officeAddress;

        return $this;
    }

    /**
     * Get officeAddress
     *
     * @return string 
     */
    public function getOfficeAddress()
    {
        return $this->officeAddress;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set crmUsername
     *
     * @param string $crmUsername
     * @return User
     */
    public function setCrmUsername($crmUsername)
    {
        $this->crmUsername = $crmUsername;

        return $this;
    }

    /**
     * Get crmUsername
     *
     * @return string 
     */
    public function getCrmUsername()
    {
        return $this->crmUsername;
    }

    /**
     * Set crmPassword
     *
     * @param string $crmPassword
     * @return User
     */
    public function setCrmPassword($crmPassword)
    {
        $this->crmPassword = $crmPassword;

        return $this;
    }

    /**
     * Get crmPassword
     *
     * @return string 
     */
    public function getCrmPassword()
    {
        return $this->crmPassword;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return User
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
     * Set status
     *
     * @param string $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set position
     *
     * @param \Acme\MainBundle\Entity\Position $position
     * @return User
     */
    public function setPosition(\Acme\MainBundle\Entity\Position $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \Acme\MainBundle\Entity\Position 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set identity
     *
     * @param \Acme\MainBundle\Entity\Identity $identity
     * @return User
     */
    public function setIdentity(\Acme\MainBundle\Entity\Identity $identity = null)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get identity
     *
     * @return \Acme\MainBundle\Entity\Identity 
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Add customproject
     *
     * @param \Acme\MainBundle\Entity\Customproject $customproject
     * @return User
     */
    public function addCustomproject(\Acme\MainBundle\Entity\Customproject $customproject)
    {
        $this->customproject[] = $customproject;

        return $this;
    }

    /**
     * Remove customproject
     *
     * @param \Acme\MainBundle\Entity\Customproject $customproject
     */
    public function removeCustomproject(\Acme\MainBundle\Entity\Customproject $customproject)
    {
        $this->customproject->removeElement($customproject);
    }

    /**
     * Get customproject
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomproject()
    {
        return $this->customproject;
    }

    /**
     * Add customclient
     *
     * @param \Acme\MainBundle\Entity\Customclient $customclient
     * @return User
     */
    public function addCustomclient(\Acme\MainBundle\Entity\Customclient $customclient)
    {
        $this->customclient[] = $customclient;

        return $this;
    }

    /**
     * Remove customclient
     *
     * @param \Acme\MainBundle\Entity\Customclient $customclient
     */
    public function removeCustomclient(\Acme\MainBundle\Entity\Customclient $customclient)
    {
        $this->customclient->removeElement($customclient);
    }

    /**
     * Get customclient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomclient()
    {
        return $this->customclient;
    }
}
