<?php
// Don't forget to include the composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

use \rutgerkirkels\vcard_generator\Generator;
use \rutgerkirkels\vcard_generator\Models\Name;
use \rutgerkirkels\vcard_generator\Models\Organization;
use \rutgerkirkels\vcard_generator\Models\Email;
use \rutgerkirkels\vcard_generator\Models\Telephone;
use \rutgerkirkels\vcard_generator\Models\Url;
use \rutgerkirkels\vcard_generator\Models\Birthday;
use \rutgerkirkels\vcard_generator\Models\Note;
use \rutgerkirkels\vcard_generator\Models\Photo;

$generator = new Generator();
$generator
    // Set the first and last name
    ->setName(new Name('Marco', 'Woodberry'))
    // Set the name of the organization and the department (optional)
    ->setOrganization(new Organization('ACME', 'Engineering'))
    // Add a business landline (optional)
    ->addTelephone(new Telephone('+31206255455', 'WORK'))
    // Add a cellphone (optional)
    ->addTelephone(new Telephone('+31693382817', 'CELL'))
    // Add a business e-mail address (optional)
    ->addEmailAddress(new Email('m.woodberry@acme.com','work'))
    // Add a personal e-mail address (optional)
    ->addEmailAddress(new Email('marcowoodberry@hotmail.com','home'))
    // Set the person's birth date (optional)
    ->setBirthday(new Birthday(new DateTime('1963-03-11')))
    // Add a note (optional)
    ->setNote(new Note('First line of the note' . PHP_EOL . 'Second line of the note'))
    // Add a business website (optional)
    ->addUrl(new Url('https://www.acme.com','work'))
    // Store the VCF file. (default location is the current directory)
    ->store();
