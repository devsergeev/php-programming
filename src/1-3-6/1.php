<?php

/**
 * Пользователь ситемы
 */
class User
{
    private const MAX_LOGIN_LENGTH = 16;

    private string $login;

    /**
     * Конструктор класса User (очень полезный комменатрий, без него вообще никак было бы не понять что это)
     * @param string $login
     */
    public function __construct(string $login)
    {
        $this->guardLogin($login);
        $this->login = $login;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    private function guardLogin(string $login): void
    {
        if (strlen($login) > self::MAX_LOGIN_LENGTH) {
            throw new InvalidArgumentException('Превышена максимальная длина логина');
        }
    }
}

$user = new User('v.sergeev');

$reflection = new ReflectionClass($user);
// или так $reflection = new ReflectionClass('User');
echo $reflection->getName() . PHP_EOL;
echo $reflection->getConstructor()->getDocComment() . PHP_EOL;
