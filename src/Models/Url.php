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
     * @var string
     */
    protected $type;

    /**
     * Url constructor.
     * @param string $url
     */
    public function __construct(string $url, string $type = null)
    {
        $this->url = $url;

        if (!is_null($type)) {
            $this->type = $type;
        }
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Url
     */
    public function setUrl($url) : Url
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Url
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Converts model to string to use in Vcard
     * @return string
     */
    public function toString() :  string
    {
        $string = 'URL';

        if (!is_null($this->getType())) {
            $string .= ';TYPE=' . strtoupper($this->getType());
        }

        $string .= ':' . $this->getUrl();

        return $string;
    }
}