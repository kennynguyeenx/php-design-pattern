<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

/**
 * Class UserRepository
 * @package Kennynguyeenx\DesignPattern\FacadePattern
 */
class UserRepository
{
    /**
     * @var array
     */
    private $userArray = [];
    /**
     * @var int
     */
    private $id = 0;

    /**
     * @param User $user
     * @return User
     */
    public function insert(User $user): User
    {
        $user->setId(++$this->id);
        $this->userArray[$user->getId()] = $user;
        return $user;
    }

    /**
     * @param User $user
     * @return User
     */
    public function update(User $user)
    {
        $this->userArray[$user->getId()] = $user;
        return $user;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        unset($this->userArray[$user->getId()]);
    }

    /**
     * @param string $userName
     * @return User|null
     */
    public function getUserByUsername(string $userName)
    {
        /** @var User $user */
        foreach ($this->userArray as $user) {
            if ($user->getUserName() === $userName) {
                return $user;
            }
        }

        return null;
    }

    /**
     * @param string $userName
     * @param string $password
     * @return bool
     */
    public function isExistedUsernameAndPassword(string $userName, string $password): bool
    {
        /** @var User $user */
        foreach ($this->userArray as $user) {
            if ($user->getUserName() === $userName && $user->getPassword() === $password) {
                return true;
            }
        }

        return false;
    }
}