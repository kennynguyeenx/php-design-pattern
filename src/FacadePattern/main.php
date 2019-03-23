<?php


use Kennynguyeenx\DesignPattern\FacadePattern\CustomException;
use Kennynguyeenx\DesignPattern\FacadePattern\EmailNotification;
use Kennynguyeenx\DesignPattern\FacadePattern\LoginFacade;
use Kennynguyeenx\DesignPattern\FacadePattern\LoginValidator;
use Kennynguyeenx\DesignPattern\FacadePattern\User;
use Kennynguyeenx\DesignPattern\FacadePattern\UserRepository;

require __DIR__ . '/../../vendor/autoload.php';

$userRepository = new UserRepository();
$user1 = new User('User1', 'pass1', 'user1@example.com');
$userRepository->insert($user1);

$loginFacade = new LoginFacade(
    new LoginValidator($userRepository),
    $userRepository,
    new EmailNotification()
);

// Login failed
try {
    $loginFacade('User1', 'wrongPass');
} catch (CustomException $exception) {
    printf($exception->getMessage() . PHP_EOL);
}

// Login successfully
try {
    $user = $loginFacade('User1', 'pass1');
    printf('Last login: ' . $user->getLastTimeLogin()->format('Y-m-d H:i:s') . PHP_EOL);
} catch (CustomException $exception) {
    printf($exception->getMessage() . PHP_EOL);
}