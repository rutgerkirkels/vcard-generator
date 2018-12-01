<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Url
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Url
{
    /**
     * @var string
     */
    protected $url;

    /**
     * Url constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}