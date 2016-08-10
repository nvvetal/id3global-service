<?php
namespace ID3Global\Identity\Documents\UK;

use ID3Global\Identity\ID3IdentityObject;

class Passport extends ID3IdentityObject
{
    /**
     * @var string The passport number
     */
    private $Number;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return DrivingLicence
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }

}
