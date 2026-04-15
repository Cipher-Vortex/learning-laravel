<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('User Registration Test', function () {
    visit('/register')
        ->fill('name', 'test100')
        ->fill('email', 'test100@gmail.com')
        ->fill('password', 'test100')
        ->fill('password_confirmation', 'test100')
        ->press('@register-button');

    expect(User::where('email', 'test100@gmail.com')->exists())->toBe(true);

    $this->assertAuthenticated();
});