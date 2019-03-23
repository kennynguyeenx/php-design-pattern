<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

/**
 * Class LoginValidator
 * @package Kennynguyeenx\DesignPattern\FacadePattern
 */
class LoginValidator
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * LoginValidator constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param string $userName
     * @param $password
     * @return bool
     */
    public function validate(string $userName, string $password)
    {
        return $this->userRepository->isExistedUsernameAndPassword($userName, $password);
    }
}