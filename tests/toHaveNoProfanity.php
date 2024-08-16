<?php

declare(strict_types=1);

it('passes if a file contains no profanity', function () {
    expect('Tests\Fixtures\HasNoProfanity')
        ->toHaveNoProfanity();
});

it('passes if a file contains profanity but it is excluded', function () {
    expect('Tests\Fixtures\HasProfanityInComment')
        ->toHaveNoProfanity(excluding: ['shit']);
});

it('passes if a file contains capitalised tolerated profanity', function () {
    expect('Tests\Fixtures\HasCapitalisedToleratedProfanity')
        ->toHaveNoProfanity();
});
