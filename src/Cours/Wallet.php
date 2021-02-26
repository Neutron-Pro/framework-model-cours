<?php
namespace App\Cours;

class Wallet
{
    public float $money;
    public string $devise;
    public User $user;

    public function __construct(float $money, string $devise, User $user)
    {
        $this->money = $money;
        $this->devise = $devise;
        $this->user = $user;
    }
}
