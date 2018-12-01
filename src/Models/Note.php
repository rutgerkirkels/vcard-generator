<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Note
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Note
{
    /**
     * @var string
     */
    protected $note;

    /**
     * Note constructor.
     * @param string $note
     */
    public function __construct(string $note)
    {
        $this->note = $note;
    }
}