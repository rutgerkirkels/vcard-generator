<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Role
 * @package rutgerkirkels\vcard_generator\Models
 * @license MIT
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Role
{
    /**
     * @var string
     */
    protected $role;

    /**
     * Role constructor.
     * @param string $role
     */
    public function __construct(string $role)
    {
        $this->role = $role;
    }
}