<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testEmailIsStoredCorrectly(): void
    {
        $user = new User();
        $user->setEmail('test@example.com');
        $this->assertSame('test@example.com', $user->getEmail());
    }

    public function testPasswordIsTooShort(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $user = new User();
        $user->setPassword('User');
    }

    public function testPasswordIsTooLong() :void
    {
        $this->expectException(\InvalidArgumentException::class);
        $user= new User();
        $user->setPassword(str_repeat('a', 256));
    }
}
