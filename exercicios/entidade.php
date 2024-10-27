<?php

class Entity
{
    protected $attributes;

    protected function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }
}

class User extends Entity implements IUser
{
    public static function create(array $data): User
    {
        return new User($data);
    }

    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    public function getEmail(): string
    {
        return $this->getAttribute('email');
    }

    public function getPassword(): string
    {
        return $this->getAttribute('password');
    }

    public function setName(string $name)
    {
        $this->setAttribute('name', $name);
    }

    public function setEmail(string $email)
    {
        $this->setAttribute('email', $email);
    }

    public function setPassword(string $password)
    {
        $this->setAttribute('password', $password);
    }
}

interface IUser
{
    public function getName(): string;
    public function getEmail(): string;
    public function getPassword(): string;
    public function setName(string $name);
    public function setEmail(string $email);
    public function setPassword(string $password);
}

$userData = [
    'name' => 'Ewerton',
    'email' => 'ewerton@example.com',
    'password' => 'securepassword'
];

$user = User::create($userData);

echo $user->getName() . "\n";
echo $user->getEmail() . "\n";
echo $user->getPassword() . "\n";

$user->setName('New Name');
$user->setEmail('newemail@example.com');
$user->setPassword('newpassword');

echo $user->getName() . "\n";
echo $user->getEmail() . "\n";
echo $user->getPassword() . "\n";
