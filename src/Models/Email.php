<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Email
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Email
{
    /**
     * @var string
     */
    protected $types = ['internet'];

    /**
     * @var
     */
    protected $address;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return Email
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @var array
     */
    protected $possibleTypes = [
        'aol', 'applelink', 'attmail', 'cis', 'eworld', 'internet', 'ibmmail', 'mcimail',
        'powershare', 'prodigy', 'tlx', 'x400'
    ];

    public function toString() : string
    {
        $string = 'EMAIL;';

        $string .= 'TYPE=' . strtoupper(implode(',', $this->getTypes())) . ':';
        $string .= (!empty($this->getAddress()) ? $this->getAddress() : '');

        return trim($string);
    }
}