<?php


namespace Source\Qualifeld;


class User
{
    private  $firstName = "nome";
    private $lastName = "sobrenome";
    private $email;

    private $error;

    public function getFirstName()
    {
        return $this -> firstName;
    }

    private function setFirstName($firstName)
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
    private function setEmail($email)
    {
        $this->email = $email;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return false;
        }

        return true;

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
    private function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
        return $this;
    }


    public function setUser($firstName, $lastName, $email)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);

        if(!($this->setEmail($email)))
        {
            $this->error = "O E-mail, {$this->getEmail()} não é válido";
            return false;
        }

        return true;

    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }




}
























