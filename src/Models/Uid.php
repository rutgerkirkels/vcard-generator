<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Uid
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Uid
{
    /**
     * @var string
     */
    protected $uid;

    /**
     * Uid constructor.
     * @param string $uid
     */
    public function __construct(string $uid)
    {
        $this->uid = $uid;
    }
}