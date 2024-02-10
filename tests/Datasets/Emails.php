<?php

dataset('valid emails', function () {
    return [
        \Pest\Faker\fake()->email,
        '"ayman alhattami"@gmail.com',
        'ayman@me.com.ye'
    ];
});
