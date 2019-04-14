<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

use DateTime;

/**
 * Class LoginFacade
 * @package Kennynguyeenx\DesignPattern\FacadePattern
 */
class LoginFacade
{
    /**
     * @var LoginValidator
     */
    private $loginValidator;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var EmailNotification
     */
    private $emailNotification;

    /**
     * LoginFacade constructor.
     * @param LoginValidator $loginValidator
     * @param UserRepository $userRepository
     * @param EmailNotification $emailNotification
     */
    public function __construct(
        LoginValidator $loginValidator,
        UserRepository $userRepository,
        EmailNotification $emailNotification
    ) {
        $this->loginValidator = $loginValidator;
        $this->userRepository = $userRepository;
        $this->emailNotification = $emailNotification;
    }

    /**
     * @param string $userName
     * @param string $password
     * @return User|null
     * @throws CustomException
     */
    public function __invoke(string $userName, string $password)
    {
        $this->validate($userName, $password);
        $loginTime = new DateTime();
        $user = $this->userRepository->getUserByUsername($userName);
        $this->updateUser($user, $loginTime);
        $this->sendNotification($user, $loginTime);

        return $user;
    }

    /**
     * @param string $userName
     * @param string $password
     * @throws CustomException
     */
    protected function validate(string $userName, string $password)
    {
        if (!$this->loginValidator->validate($userName, $password)) {
            throw new CustomException('Username and password are invalid');
        }
    }

    /**
     * @param User $user
     * @param DateTime $loginTime
     */
    protected function updateUser(User $user, DateTime $loginTime)
    {
        $user->setLastTimeLogin($loginTime);
        $this->userRepository->update($user);
    }

    /**
     * @param User $user
     * @param DateTime $loginTime
     */
    protected function sendNotification(User $user, DateTime $loginTime)
    {
        $this->emailNotification->notify($user->getEmail(), 'User with name: ' . $user->getUserName() .
            ' signed in at ' . $loginTime->format('Y-m-d H:i:s'));
    }
}