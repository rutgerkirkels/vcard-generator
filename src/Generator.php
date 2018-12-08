<?php

namespace rutgerkirkels\vcard_generator;

use rutgerkirkels\vcard_generator\Models\Address;
use rutgerkirkels\vcard_generator\Models\Birthday;
use rutgerkirkels\vcard_generator\Models\Email;
use rutgerkirkels\vcard_generator\Models\Name;
use rutgerkirkels\vcard_generator\Models\Note;
use rutgerkirkels\vcard_generator\Models\Organization;
use rutgerkirkels\vcard_generator\Models\Photo;
use rutgerkirkels\vcard_generator\Models\Telephone;
use rutgerkirkels\vcard_generator\Models\Url;
use rutgerkirkels\vcard_generator\Models\Vcard;

/**
 * Class generator
 * @package rutgerkirkels\vcard_generator
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Generator
{
    /**
     * @var Vcard
     */
    protected $vcard;

    /**
     * @var
     */
    protected $string;

    /**
     * Generator constructor.
     */
    public function __construct()
    {
        $this->vcard = new Vcard();
    }

    /**
     * @param Name $name
     * @return Generator
     */
    public function setName(Name $name) : Generator
    {
        $this->vcard->setName($name);

        return $this;
    }

    /**
     * @param Address $address
     * @return Generator
     */
    public function addAddress(Address $address) : Generator
    {
        $this->vcard->addAddress($address);

        return $this;
    }

    /**
     * @param Email $email
     * @return Generator
     */
    public function addEmailAddress(Email $email) : Generator
    {
        $this->vcard->addEmailAddress($email);

        return $this;
    }

    /**
     * @param Telephone $telephone
     * @return Generator
     */
    public function addTelephone(Telephone $telephone) : Generator
    {
        $this->vcard->addTelephone($telephone);

        return $this;
    }

    /**
     * @param Organization $organization
     * @return Generator
     */
    public function setOrganization(Organization $organization) : Generator
    {
        $this->vcard->setOrganization($organization);

        return $this;
    }

    public function addUrl(Url $url) : Generator
    {
        $this->vcard->addUrl($url);

        return $this;
    }

    public function setBirthday(Birthday $birthday) : Generator
    {
        $this->vcard->setBirthday($birthday);

        return $this;
    }

    public function setNote(Note $note) : Generator
    {
        $this->vcard->setNote($note);

        return $this;
    }

    public function setPhoto(Photo $file) : Generator
    {
        $this->vcard->setPhoto($file);

        return $this;
    }

    /**
     * @return string
     */
    public function generate()
    {
        $this->string = 'BEGIN:VCARD' . PHP_EOL;
        $this->string .= 'VERSION:' . number_format($this->vcard->getVersion(),1,'.', '') . PHP_EOL;
        $this->string .= $this->vcard->getName()->toString() . PHP_EOL;
        $this->string .= $this->vcard->getName()->getFormattedNameString() . PHP_EOL;
        if (!is_null($this->vcard->getOrganization())) {
            $this->string .= $this->vcard->getOrganization()->toString() . PHP_EOL;
        }
        foreach ($this->vcard->getAddresses() as $address) {
            $this->string .= $address->toString() . PHP_EOL;
        }

        foreach ($this->vcard->getEmailAddresses() as $emailAddress) {
            $this->string .= $emailAddress->toString() . PHP_EOL;
        }

        foreach ($this->vcard->getTelephones() as $telephone) {
            $this->string .= $telephone->toString() . PHP_EOL;
        }

        foreach ($this->vcard->getUrls() as $url) {
            $this->string .= $url->toString() . PHP_EOL;
        }

        if (!is_null($this->vcard->getBirthday())) {
            $this->string .= $this->vcard->getBirthday()->toString() . PHP_EOL;
        }

        if (!is_null($this->vcard->getNote())) {
            $this->string .= $this->vcard->getNote()->toString() . PHP_EOL;
        }

        if (!is_null($this->vcard->getPhoto())) {
            $this->string .= $this->vcard->getPhoto()->toString() . PHP_EOL;
        }

        $this->string .= 'END:VCARD';

        return $this->string;
    }

    public function store(string $path = './', $filename = null) : bool
    {
        if (is_null($filename)) {
            $filename = rawurlencode($this->vcard->getName()->getFirstName() . $this->vcard->getName()->getLastName()) . '.vcf';
        }

        if ($storagePath = realpath($path)) {
            file_put_contents($filename, $this->generate());
        }

        return true;

    }
}