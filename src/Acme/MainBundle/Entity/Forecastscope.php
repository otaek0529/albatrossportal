<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forecastscope
 *
 * @ORM\Table(name="forecastscope", uniqueConstraints={@ORM\UniqueConstraint(name="month_uniq", columns={"month", "bu_id"})}, indexes={@ORM\Index(name="IDX_9835AE95E0319FBC", columns={"bu_id"})})
 * @ORM\Entity
 */
class Forecastscope
{
    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=255, nullable=false)
     */
    private $month;

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
     * Set month
     *
     * @param string $month
     * @return Forecastscope
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string 
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set forecast
     *
     * @param integer $forecast
     * @return Forecastscope
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
     * @return Forecastscope
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
