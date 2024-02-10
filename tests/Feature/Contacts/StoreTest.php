<?php

use function Pest\Faker\fake;

uses(\Illuminate\Foundation\Testing\WithFaker::class);

todo('more test');

it('can store test', function($email) {
    login()
        ->post('/contacts', [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => $email,
            'phone' => fake()->e164PhoneNumber,
            'address' => '1 Test Street',
            'city' => 'Testerfield',
            'region' => 'Derbyshire',
            'country' => fake()->randomElement(['us', 'ca']),
            'postal_code' => fake()->postcode,
        ])
        ->assertRedirect('/contacts')
        ->assertSessionHas('success', 'Contact created.');

    $contact = \App\Models\Contact::latest()->first();

//    $this->assertEquals('Testerfield', $contact->city);



//    expect($contact->first_name)->toBeString()->not->toBeEmpty();
//    expect($contact->last_name)->toBeString()->not->toBeEmpty();
//    expect($contact->email)->toBeString()->toContain('@');
//    expect($contact->phone)->toBePhoneNumber();
//    expect($contact->city)->toBe('Testerfield');
//    expect($contact->region)->toBe('Derbyshire');
//    expect($contact->country)->toBeIn(['us','ca']);


    expect(\App\Models\Contact::latest()->first())
        ->first_name->toBeString()->not->toBeEmpty()
        ->last_name->toBeString()->not->toBeEmpty()
        ->email->toBeString()->toContain('@')
        ->phone->toBePhoneNumber()
        ->city->toBe('Testerfield')
        ->region->toBe('Derbyshire')
        ->country->toBeIn(['us','ca']);
})
->with('valid emails')
    ->group('group1')
//    ->with([
//        ['email' => fake()->email],
//        ['email' => '"ayman alhattami"@gmail.com', 'first_name' => 'Ayman']
//    ])
;
