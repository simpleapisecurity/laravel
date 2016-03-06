<?php

namespace SimpleAPISecurity\Laravel;

use Illuminate\Contracts\Encryption\Encrypter as EncrypterContract;
use Illuminate\Encryption\BaseEncrypter;
use SimpleAPISecurity\PHP\Encryption;

class APISecurityEncrypter extends BaseEncrypter implements EncrypterContract
{
    /**
     * Create a new encrypter instance.
     *
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * Encrypt the given value.
     *
     * @param string $value
     *
     * @return string
     */
    public function encrypt($value)
    {
        return Encryption::encryptMessage($value, $this->key, $this->key);
    }

    /**
     * Decrypt the given value.
     *
     * @param string $payload
     *
     * @return string
     */
    public function decrypt($payload)
    {
        return Encryption::decryptMessage($payload, $this->key, $this->key);
    }
}