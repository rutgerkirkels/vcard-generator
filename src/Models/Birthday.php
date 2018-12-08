<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Birthday
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Birthday
{
    /**
     * @var \DateTime
     */
    protected $birthday;

    /**
     * Birthday constructor.
     * @param \DateTime $birthday
     */
    public function __construct(\DateTime $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday() : \DateTime
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     * @return Birthday
     */
    public function setBirthday(\DateTime $birthday) : Birthday
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * Converts model to string to use in Vcard
     * @return string
     */
    public function toString() : string
    {
        return 'BDAY:' . $this->birthday->format('Y-m-d');
    }
}