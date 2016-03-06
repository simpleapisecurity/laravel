<?php

namespace SimpleAPISecurity\Laravel;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use SimpleAPISecurity\PHP\Hash;

class APISecurityHasher implements HasherContract
{
    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param string $unusedHashedValue
     * @param array  $unusedOptions
     *
     * @return bool
     */
    public function needsRehash($unusedHashedValue, array $unusedOptions = [])
    {
        return false;
    }

    /**
     * Hash the given value.
     *
     * @param string $value
     * @param array  $options
     *
     * @throws \RuntimeException
     *
     * @return string
     * @return string
     */
    public function make($value, array $options = [])
    {
        return Hash::hashPassword($value);
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param string $value
     * @param string $hashedValue
     * @param array  $unusedOptions Options are not used for Sodium password verification
     *
     * @return bool
     */
    public function check($value, $hashedValue, array $unusedOptions = [])
    {
        return Hash::verifyPassword($value, $hashedValue);
    }
}