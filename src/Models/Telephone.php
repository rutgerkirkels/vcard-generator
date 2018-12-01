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
    protected $number;

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
        if (in_array($type, $this->possibleTypes)) {
            if (!in_array($type, $this->types)) {
                $this->types[] = $type;
            }
        }

        return $this;
    }


}