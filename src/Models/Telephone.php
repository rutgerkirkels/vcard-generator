<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Telephone
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Telephone
{
    /**
     * @var string
     */
    protected $number;

    /**
     * @var array
     */
    protected $types = [
        'voice'
    ];

    /**
     * @var array
     */
    protected $possibleTypes = [
        'pref','work','home','voice','fax','msg','cell','pager','bbs','modem','car','isdn','video'
    ];

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Telephone
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return array
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param string $type
     * @return Telephone
     */
    public function addType(string $type): Telephone
    {
        if (in_array(strtolower($type), $this->possibleTypes)) {
            if (!in_array($type, $this->types)) {
                $this->types[] = strtoupper($type);
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function toString() : string
    {
        $string = 'TEL;';

        $types = [];
        foreach($this->getTypes() as $type) {
            $types[] = 'TYPE=' . strtoupper($type);
        }
        $string .= implode(';', $types) . ':';
        $string .= (!empty($this->getNumber()) ? $this->getNumber() : '');

        return trim($string);
    }

}