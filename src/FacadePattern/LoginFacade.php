<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

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
        // Validate
        if (!$this->loginValidator->validate($userName, $password)) {
            throw new CustomException('Username and password are invalid');
        }

        // Update user
        $user = $this->userRepository->getUserByUsername($userName);
        $loginTime = new \DateTime();
        $user->setLastTimeLogin($loginTime);
        $user = $this->userRepository->update($user);

        // Send notification
        $this->emailNotification->notify($user->getEmail(), 'User with name: ' . $user->getUserName() .
            ' signed in at ' . $loginTime->format('Y-m-d H:i:s'));

        return $user;
    }
}