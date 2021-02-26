<?php
namespace App\Cours;

class User
{
    // Fields
    public string $name;
    public string $email;
    public string $password;
    public Wallet $wallet;

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->wallet = new Wallet(0, 'Euro', $this);
    }
}
