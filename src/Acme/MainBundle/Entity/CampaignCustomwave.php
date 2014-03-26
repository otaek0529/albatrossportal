<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignCustomwave
 *
 * @ORM\Table(name="campaign_customwave", indexes={@ORM\Index(name="IDX_FDC16F9AF639F774", columns={"campaign_id"}), @ORM\Index(name="IDX_FDC16F9A59FFD0DF", columns={"customwave_id"})})
 * @ORM\Entity
 */
class CampaignCustomwave
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
     * @var \Acme\MainBundle\Entity\Campaign
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Campaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */
    private $campaign;

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
     * Set campaign
     *
     * @param \Acme\MainBundle\Entity\Campaign $campaign
     * @return CampaignCustomwave
     */
    public function setCampaign(\Acme\MainBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \Acme\MainBundle\Entity\Campaign 
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set customwave
     *
     * @param \Acme\MainBundle\Entity\Customwave $customwave
     * @return CampaignCustomwave
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
