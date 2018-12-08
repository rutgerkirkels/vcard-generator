<?php

namespace rutgerkirkels\vcard_generator\Models;

use rutgerkirkels\vcard_generator\Exceptions\EmailException;

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
     * @var string
     */
    protected $address;

    /**
     * Email constructor.
     * @param string $address
     * @param string|null $type
     */
    public function __construct(string $address, string $type = null)
    {
        $this->setAddress($address);

        if (!is_null($type)) {
            $this->addType($type);
        }
    }

    /**
     * @return null|string
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Email
     */
    public function setAddress(string $address) : Email
    {
        try {
            if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
                throw new EmailException($address . ' is not a valid e-mail address');
            }
        }
        catch (EmailException $e) {
            trigger_error($e->getMessage(), E_USER_WARNING);

            return $this;
        }
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
     * Converts model to string to use in Vcard
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