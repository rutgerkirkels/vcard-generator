<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Vcard
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Vcard
{
    /**
     * @var float
     */
    protected $version = 3.0;

    /**
     * @var Name
     */
    protected $name;

    /**
     * @var string
     */
    protected $formattedName;

    /**
     * @var array
     */
    protected $addresses = [];

    /**
     * @var Birthday
     */
    protected $birthday;

    /**
     * @var array
     */
    protected $emailAddresses = [];

    /**
     * @var Geo
     */
    protected $geo;

    /**
     * @var Note
     */
    protected $note;

    /**
     * @var Organization
     */
    protected $organization;

    /**
     * @var Role
     */
    protected $role;

    /**
     * @var array
     */
    protected $telephoneNumbers = [];

    /**
     * Vcard constructor.
     * @param float $version
     */
    public function __construct(float $version = null)
    {
        if (!is_null($version)) {
            $this->version = $version;
        }
    }

    /**
     * @return float
     */
    public function getVersion(): float
    {
        return $this->version;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * @param Name $name
     * @return Vcard
     */
    public function setName(Name $name) : Vcard
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param Address $address
     * @return Vcard
     */
    public function addAddress(Address $address) : Vcard
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * @param Birthday $birthday
     * @return Vcard
     */
    public function setBirthday(Birthday $birthday) : Vcard
    {
        $this->birthday = $birthday;
    }

    /**
     * @return array
     */
    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }

    /**
     * @param Email $email
     * @return Vcard
     */
    public function addEmailAddress(Email $email) : Vcard
    {
        $this->emailAddresses[] = $email;

        return $this;
    }

    /**
     * @param Geo $geo
     * @return Vcard
     */
    public function setGeo(Geo $geo) : Vcard
    {
        $this->geo = $geo;

        return $this;
    }

    /**
     * @param Note $note
     * @return Vcard
     */
    public function setNote(Note $note) : Vcard
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @param Organization $organization
     * @return Vcard
     */
    public function setOrganization(Organization $organization): Vcard
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @param Role $role
     * @return Vcard
     */
    public function setRole(Role $role): Vcard
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @param Telephone $telephone
     * @return Vcard
     */
    public function addTelephone(Telephone $telephone) : Vcard
    {
        $this->telephoneNumbers[] = $telephone;

        return $this;
    }

    /**
     * @return array
     */
    public function getTelephones() : array
    {
        return $this->telephoneNumbers;
    }
}