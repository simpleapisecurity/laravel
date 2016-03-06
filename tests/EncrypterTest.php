<?php

use SimpleAPISecurity\Laravel\APISecurityEncrypter;
use SimpleAPISecurity\Laravel\SodiumLibrary;

class EncrypterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires extension libsodium
     */
    public function testSodiumEncryption()
    {
        $e = new APISecurityEncrypter(str_repeat('a', 16));
        $encrypted = $e->encrypt('foo');
        $this->assertNotEquals('foo', $encrypted);
        $this->assertEquals('foo', $e->decrypt($encrypted));
    }
}
