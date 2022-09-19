<?php

declare(strict_types=1);

use JustSteveKing\Laravel\OTPAuth\Contracts\GeneratorContract;

it('can generate an one time password', function () {
    /**
     * @var GeneratorContract $generator
     */
    $generator = app()->make(
        abstract: GeneratorContract::class,
    );
    expect(
        $generator->generate(),
    )->toBeString();

    expect(
        strlen($generator->generate()),
    )->toBeInt()->toEqual(config('otp-auth.length'));
});
