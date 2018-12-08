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

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return Note
     */
    public function setNote($note) : Note
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Converts model to string to use in Vcard
     * @return string New lines can be used by inserting \n
     */
    public function toString() : string
    {
        return 'NOTE:' . str_replace(PHP_EOL, '\\n', $this->getNote());
    }
}