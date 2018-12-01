<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Email
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Email
{
    /**
     * @var string
     */
    protected $type = 'internet';

    /**
     * @var
     */
    protected $address;

    /**
     * @var array
     */
    protected $possibleTypes = [
        'aol', 'applelink', 'attmail', 'cis', 'eworld', 'internet', 'ibmmail', 'mcimail',
        'powershare', 'prodigy', 'tlx', 'x400'
    ];
}