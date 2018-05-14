<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Oliver ', 'name')
            ->type('oliver.otsmann@khk.ee ', 'email')
            ->type('qwerty ', 'password')
            ->type('qwerty ', 'password')
            ->press('Register')
            ->seePageIs('/welcome');
    }
}
