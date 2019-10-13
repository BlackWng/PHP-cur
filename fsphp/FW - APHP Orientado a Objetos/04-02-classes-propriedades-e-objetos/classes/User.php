<?php


class User
{
    public  $firstName;
    public $lastName;
    public $email;

    public function getFirstName()
    {
        return $this -> firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
        return $firstName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuário em um formato válido
     * @param mixed $email
     * @return User
     */
    public function setEmail($email)
    {

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->email = $email;
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
        return $this;
    }




}