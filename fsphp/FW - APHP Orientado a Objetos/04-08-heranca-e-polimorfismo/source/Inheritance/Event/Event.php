<?php


namespace Source\Inheritance\Event;


class Event
{
    private $event;
    private $date;
    private $price;
    private $register;
    protected $vacancies;

    /**
     * Event constructor.
     * @param $event
     * @param $date
     * @param $price
     * @param $register
     * @param $vacancies
     */
    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($name, $email)
    {
        if($this->vacancies >= 1)
        {
            $this->vacancies--;
            $this->setRegister($name, $email);
            echo "<p class='trigger accept'>Parabéns {$name}! Consegiu uma vaga!!!</p>";
        }
        else {
            echo "<p class='trigger error'>Desculpe, {$name}, não temos mais vagas!</p>";
        }
    }

    /**
     * @param mixed $register
     */
    protected function setRegister($name, $email)
    {
        $this->register = ["name" => $name, "email" => $email];
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date->format("d/m/y H:i:s");
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return number_format($this->price, 2, ",", ".");
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * @return mixed
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }





}