<?php

use App\Models\User;

test('user can see the register form', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('user can register with name and email', function () {
    $response = $this->post('/', [
        'name' => 'John Doe',
        'email' => 'johndoe@gmail.com'
    ]);

    $response->assertStatus(302);
});

test('user cannot register with duplicate email', function () {
    $user = User::factory()->create();

    $response = $this->post('/', [
        'name' => 'John Doe',
        'email' => $user->email,
    ]);

    $response->assertStatus(302);
});
