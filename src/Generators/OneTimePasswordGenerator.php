<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\OTPAuth\Generators;

use Exception;
use JustSteveKing\Laravel\OTPAuth\Contracts\GeneratorContract;

final class OneTimePasswordGenerator implements GeneratorContract
{
    /**
     * Generate a One Time Password code.
     *
     * @param int|null $length
     * @return string
     * @throws Exception
     */
    public function generate(?int $length = null): string
    {
        $number = random_int(
            min: 000_000,
            max: 999_999,
        );

        return str_pad(
            string: strval($number),
            length: $length ?? intval(config('otp-auth.length')),
            pad_string: '0',
            pad_type: STR_PAD_LEFT,
        );
    }
}
