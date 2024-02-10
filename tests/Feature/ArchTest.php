<?php

it('does not use debugging functions')
    ->expect(['dd', 'dump'])
    ->not->toBeUsed();

it('uses the redirect facade for redirecting')
    ->expect('to_route')
    ->not->toBeUsedIn('App\\Http\\Controllers\\');
