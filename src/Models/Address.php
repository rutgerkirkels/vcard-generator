<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Address
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Address
{
    /**
     * @var array
     */
    protected $types = [];

    /**
     * @var string
     */
    protected $postofficeAddress;

    /**
     * @var string
     */
    protected $extendedAddress;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $locality;

    /**
     * @var string
     */
    protected $region;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $country;

    /**
     * @return array
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param string $type
     * @return Address
     */
    public function addType(string $type): Address
    {
        $this->types[] = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostofficeAddress(): ?string
    {
        return $this->postofficeAddress;
    }

    /**
     * @param string $postofficeAddress
     * @return Address
     */
    public function setPostofficeAddress(string $postofficeAddress): Address
    {
        $this->postofficeAddress = $postofficeAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtendedAddress(): ?string
    {
        return $this->extendedAddress;
    }

    /**
     * @param string $extendedAddress
     * @return Address
     */
    public function setExtendedAddress(string $extendedAddress): Address
    {
        $this->extendedAddress = $extendedAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     * @return Address
     */
    public function setLocality(string $locality): Address
    {
        $this->locality = $locality;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return Address
     */
    public function setRegion(string $region): Address
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode(string $postalCode): Address
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    public function toString() : string
    {
        $string = 'ADR;';

        $string .= 'TYPE=' . strtoupper(implode(',', $this->types)) . ':';
        $string .= (!empty($this->getPostofficeAddress()) ? $this->getPostofficeAddress() : '') . ';';
        $string .= (!empty($this->getExtendedAddress()) ? $this->getExtendedAddress() : '') . ';';
        $string .= (!empty($this->getStreet()) ? $this->getStreet() : '') . ';';
        $string .= (!empty($this->getLocality()) ? $this->getLocality() : '') . ';';
        $string .= (!empty($this->getRegion()) ? $this->getRegion() : '') . ';';
        $string .= (!empty($this->getPostalCode()) ? $this->getPostalCode() : '') . ';';
        $string .= (!empty($this->getCountry()) ? $this->getCountry() : '') . ';';
        return trim($string);
    }
}