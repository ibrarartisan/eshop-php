<?php

namespace App\Classes;

class User{
    private int $_id;
    private string $_name;
    private string $_email;

    public function __construct(){

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): User
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->_email = $email;
        return $this;
    }


    /**
     * @param string $user
     * @return bool
     */
    public function login($user): bool
    {
       return true;
    }
    /**
     * @param string $user
     * @return bool
     */
    public function logOut($user): bool
    {
       return true;
    }


}