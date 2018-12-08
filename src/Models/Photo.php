<?php

namespace rutgerkirkels\vcard_generator\Models;

/**
 * Class Photo
 * @package rutgerkirkels\vcard_generator\Models
 * @author Rutger Kirkels <rutger@kirkels.nl>
 */
class Photo
{
    /**
     * @var string
     */
    protected $imageData;

    /**
     * Photo constructor.
     * @param string $imageFile
     */
    public function __construct(string $imageFile)
    {
        $this->imageData = base64_encode(file_get_contents($imageFile));
    }

    /**
     * Converts model to string to use in Vcard
     * @return string
     */
    public function toString() : string
    {
        return 'PHOTO;ENCODING=b;TYPE=JPEG:' . $this->imageData;
    }
}