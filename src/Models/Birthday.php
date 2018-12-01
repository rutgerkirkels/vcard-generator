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
}