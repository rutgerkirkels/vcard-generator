<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Organization
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Organization
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $department;

    /**
     * Organization constructor.
     * @param string|null $name
     * @param string|null $department
     */
    public function __construct(string $name = null, string $department = null)
    {
        if (!is_null($name)) {
            $this->setName($name);
        }

        if (!is_null($department)) {
            $this->setDepartment($department);
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Organization
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return Organization
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Converts model to string to use in Vcard
     * @return string
     */
    public function toString() : string
    {
        $string = 'ORG:';
        $string .= $this->getName() . ';';
        $string .= $this->getDepartment();

        return trim($string);
    }
}