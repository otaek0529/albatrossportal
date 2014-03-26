<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date
 *
 * @ORM\Table(name="date", uniqueConstraints={@ORM\UniqueConstraint(name="daily_date_bu_id_uniq", columns={"daily_date", "bu_id"})}, indexes={@ORM\Index(name="IDX_AA9E377AE0319FBC", columns={"bu_id"})})
 * @ORM\Entity
 */
class Date
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daily_date", type="date", nullable=false)
     */
    private $dailyDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="forecast", type="bigint", nullable=true)
     */
    private $forecast;

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
     *   @ORM\JoinColumn(name="bu_id", referencedColumnName="id")
     * })
     */
    private $bu;



    /**
     * Set dailyDate
     *
     * @param \DateTime $dailyDate
     * @return Date
     */
    public function setDailyDate($dailyDate)
    {
        $this->dailyDate = $dailyDate;

        return $this;
    }

    /**
     * Get dailyDate
     *
     * @return \DateTime 
     */
    public function getDailyDate()
    {
        return $this->dailyDate;
    }

    /**
     * Set forecast
     *
     * @param integer $forecast
     * @return Date
     */
    public function setForecast($forecast)
    {
        $this->forecast = $forecast;

        return $this;
    }

    /**
     * Get forecast
     *
     * @return integer 
     */
    public function getForecast()
    {
        return $this->forecast;
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
     * @return Date
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
}
