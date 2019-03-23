<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

use DateTime;

/**
 * Class User
 * @package Kennynguyeenx\DesignPattern\FacadePattern
 */
class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $email;
    /**
     * @var DateTime|null
     */
    private $lastTimeLogin;

    /**
     * User constructor.
     * @param string $userName
     * @param string $password
     * @param string $email
     */
    public function __construct(string $userName, string $password, string $email)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return DateTime|null
     */
    public function getLastTimeLogin(): DateTime
    {
        return $this->lastTimeLogin;
    }

    /**
     * @param DateTime|null $lastTimeLogin
     */
    public function setLastTimeLogin(DateTime $lastTimeLogin)
    {
        $this->lastTimeLogin = $lastTimeLogin;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}