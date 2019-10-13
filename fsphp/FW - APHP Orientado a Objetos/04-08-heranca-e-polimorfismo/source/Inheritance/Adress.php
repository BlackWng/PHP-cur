<?php

namespace Source\Inheritance;

class Adress
{
    private $city;
    private $street;
    private $complement;
    private $number;

    /**
     * Adress constructor.
     * @param $city
     * @param $street
     * @param $complement
     * @param $number
     */
    public function __construct($city, $street, $complement, $number = null)
    {
        $this->city = $city;
        $this->street = $street;
        $this->complement = $complement;
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return mixed
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @return null
     */
    public function getNumber()
    {
        return $this->number;
    }




}