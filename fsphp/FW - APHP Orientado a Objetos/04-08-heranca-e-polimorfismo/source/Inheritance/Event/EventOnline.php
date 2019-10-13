<?php


namespace Source\Inheritance\Event;


class EventOnline extends Event
{
    private $link;

    public function __construct($event, \DateTime $date, $price, $vacancies = null, $link)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }
    public function register($name, $email)
    {
        $this->vacancies++;
        $this->setRegister($name, $email);
        echo "<p class='trigger accept'>Show {$name}! Cadastrado com sucesso!!!</p>";
    }

}