<?php

it('does not use debugging functions', function(){
    expect(['dd', 'dump'])
        ->not
        ->toBeUsed();
});
