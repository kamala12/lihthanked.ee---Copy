<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends PHPUnit_Framework_TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/register')
            ->type('test', 'name')
            ->type('test@test.com', 'email')
            ->type('test1', 'password')
            ->type('test1', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/home');
    }
}