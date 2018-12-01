<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Title
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Title
{
    /**
     * @var string
     */
    protected $title;

    /**
     * Title constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}