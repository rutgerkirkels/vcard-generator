<?php

namespace rutgerkirkels\vcard_generator;

use rutgerkirkels\vcard_generator\Models\Address;
use rutgerkirkels\vcard_generator\Models\Email;
use rutgerkirkels\vcard_generator\Models\Name;
use rutgerkirkels\vcard_generator\Models\Vcard;

/**
 * Class generator
 * @package rutgerkirkels\vcard_generator
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Generator
{
    protected $vcard;

    protected $string;

    public function __construct()
    {
        $this->vcard = new Vcard();
    }

    public function setName(Name $name) : Generator
    {
        $this->vcard->setName($name);

        return $this;
    }

    public function addAddress(Address $address) : Generator
    {
        $this->vcard->addAddress($address);

        return $this;
    }

    public function addEmailAddress(Email $email) : Generator
    {
        $this->vcard->addEmailAddress($email);

        return $this;
    }

    public function generate()
    {
        $this->string = 'BEGIN:VCARD' . PHP_EOL;
        $this->string .= 'VERSION:' . number_format($this->vcard->getVersion(),1,'.', '') . PHP_EOL;
        $this->string .= $this->vcard->getName()->toString() . PHP_EOL;
        $this->string .= $this->vcard->getName()->getFormattedNameString() . PHP_EOL;
        foreach ($this->vcard->getAddresses() as $address) {
            $this->string .= $address->toString() . PHP_EOL;
        }

        foreach ($this->vcard->getEmailAddresses() as $emailAddress) {
            $this->string .= $emailAddress->toString() . PHP_EOL;
        }
        $this->string .= 'END:VCARD';

        return $this->string;
    }
}