<?php

use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('admin can view contact list', function () {
    $user = User::factory()->create();
    $contact = Contact::create([
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@example.com',
        'inquiry_type' => 'general',
        'message' => 'Hello',
    ]);

    $response = $this->actingAs($user)->get(route('admin.contacts.index'));

    $response->assertStatus(200);
    $response->assertSee('John Doe');
    $response->assertSee('john@example.com');
});

test('admin can view contact details', function () {
    $user = User::factory()->create();
    $contact = Contact::create([
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.com',
        'phone' => '1234567890',
        'company' => 'Acme Corp',
        'inquiry_type' => 'support',
        'message' => 'Help needed',
    ]);

    $response = $this->actingAs($user)->get(route('admin.contacts.show', $contact));

    $response->assertStatus(200);
    $response->assertSee('Jane Doe');
    $response->assertSee('jane@example.com');
    $response->assertSee('1234567890');
    $response->assertSee('Acme Corp');
    $response->assertSee('Help needed');
});
