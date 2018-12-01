<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Geo
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Geo
{
    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Geo
     */
    public function setLatitude(float $latitude): Geo
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Geo
     */
    public function setLongitude(float $longitude): Geo
    {
        $this->longitude = $longitude;
        return $this;
    }
}