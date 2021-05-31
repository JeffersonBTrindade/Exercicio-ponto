<?php

namespace Forseti\Bot\Ponto\Bean;

trait LoginBean
{
    private $email;
    private $password;

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

/*
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
*/
}