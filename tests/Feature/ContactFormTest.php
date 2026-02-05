<?php

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('contact page is accessible', function () {
    $response = $this->get(route('contact'));

    $response->assertStatus(200);
});

test('user can submit contact form with valid data', function () {
    $data = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@example.com',
        'phone' => '1234567890',
        'company' => 'Acme Inc',
        'inquiry_type' => 'general',
        'message' => 'Hello, I have a question.',
    ];

    $response = $this->post(route('contact.submit'), $data);

    $response->assertSessionHas('success');
    $response->assertRedirect();

    $this->assertDatabaseHas('contacts', [
        'email' => 'john@example.com',
        'inquiry_type' => 'general',
    ]);
});

test('user cannot submit contact form with invalid data', function () {
    $response = $this->post(route('contact.submit'), []);

    $response->assertSessionHasErrors(['first_name', 'last_name', 'email', 'inquiry_type', 'message']);
});
