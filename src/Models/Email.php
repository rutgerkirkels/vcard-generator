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
     * @param string $type
     * @return Generator
     */
    public function addType(string $type) : Email
    {
        $this->types[] = $type;

        return $this;
    }

    /**
     * @var array
     */
    protected $possibleTypes = [
        'aol', 'applelink', 'attmail', 'cis', 'eworld', 'internet', 'ibmmail', 'mcimail',
        'powershare', 'prodigy', 'tlx', 'x400'
    ];

    /**
     * @return string
     */
    public function toString() : string
    {
        $string = 'EMAIL;';

        $types = [];
        foreach ($this->getTypes() as $type) {
            $types[] = 'TYPE=' . strtoupper($type);
        }

        $string .= implode(';',$types) . ':';
        $string .= (!empty($this->getAddress()) ? $this->getAddress() : '');

        return trim($string);
    }
}