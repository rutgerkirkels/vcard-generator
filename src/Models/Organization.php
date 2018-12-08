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