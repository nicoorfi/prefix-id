<?php

declare(strict_types=1);

function prefix_id(string $prefix, int $length = 24): string
{
    // Generate a string of random bytes of the specified length
    $randomBytes = random_bytes($length);

    // Encode the random bytes to a base64 string and remove trailing '=' characters
    $base64String = rtrim(base64_encode($randomBytes));

    // Generate a string of 3 random characters from the given set
    $randomChars = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 3);

    // Replace the characters '+', '/', and '=' in the base64 string with the random characters
    $urlSafeString = strtr($base64String, '+/=', $randomChars);

    // Concatenate the prefix with an underscore and the URL-safe string, then return the result
    return $prefix . '_' . $urlSafeString;
}
