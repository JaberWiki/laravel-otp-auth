<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\OTPAuth\Contracts;

interface GeneratorContract
{
    /**
     * Generate a new One Time Password code.
     *
     * @param  int|null  $length
     * @return string
     */
    public function generate(null|int $length = null): string;
}
