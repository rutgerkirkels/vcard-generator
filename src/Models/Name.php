<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Name
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Name
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $additionalName;

    /**
     * @var string
     */
    protected $prefix;

    /**
     * @var
     */
    protected $suffix;

    /**
     * Name constructor.
     * @param string|null $firstName
     * @param string|null $lastName
     */
    public function __construct(string $firstName = null, string $lastName = null)
    {
        if (!is_null($firstName)) {
            $this->setFirstName($firstName);
        }

        if (!is_null($lastName)) {
            $this->setLastName($lastName);
        }
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Name
     */
    public function setFirstName(string $firstName): Name
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Name
     */
    public function setLastName(string $lastName): Name
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalName(): ?string
    {
        return $this->additionalName;
    }

    /**
     * @param string $additionalName
     * @return Name
     */
    public function setAdditionalName(string $additionalName): Name
    {
        $this->additionalName = $additionalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return Name
     */
    public function setPrefix(string $prefix): Name
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param mixed $suffix
     * @return Name
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * Converts model to string to use in Vcard
     * @return string
     */
    public function toString() : string {
        $string = 'N:';
        $string .= (!empty($this->getLastName()) ? $this->getLastName() : '') . ';';
        $string .= (!empty($this->getFirstName()) ? $this->getFirstName() : '') . ';';
        $string .= (!empty($this->getAdditionalName()) ? $this->getAdditionalName() : '') . ';';
        $string .= (!empty($this->getPrefix()) ? $this->getPrefix() : '') . ';';
        $string .= (!empty($this->getSuffix()) ? $this->getSuffix() : '') . ';';

        return $string;
    }

    /**
     * Converts model to FN string to use in Vcard
     * @return string
     */
    public function getFormattedNameString() : string {
        $string = 'FN:';
        $string .= (!empty($this->getPrefix()) ? $this->getPrefix() : '') . ' ';
        $string .= (!empty($this->getFirstName()) ? $this->getFirstName() : '') . ' ';
        $string .= (!empty($this->getLastName()) ? $this->getLastName() : '');
        $string .= (!empty($this->getSuffix()) ? ', ' . $this->getSuffix() : '') . ' ';

        return trim($string);
    }
}