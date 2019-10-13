<?php


namespace Source\Loading;


class User
{
    public $name;

    /*private $age;
    private $email;
    private $error;

    public function setUser($nome, $idade, $mail)
    {
        $this->name = $nome;
        $this->age = $idade;
        $this->email = $mail;

        if(!($this->setEmail($mail)))
        {
            $this->error = "O E-mail, {$this->getEmail()} não é válido";
            return false;
        }
        return true;
    }

    private function setEmail($email)
    {
        $this->email = $email;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return false;
        }

        return true;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getError()
    {
        return $this->error;
    }*/

}