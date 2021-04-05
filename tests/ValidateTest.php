<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    // Clase que valida email
    public function test_email()
    {
        $email = validate::email('i@rimorsoft.com');
        $this->assertTrue($email);

        $email = validate::email('i@@rimorsoft.com');
        $this->assertFalse($email);
    }

    // Clase que valida url
    public function test_url()
    {
        $url = validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = validate::url('platzi.com');
        $this->assertFalse($url);
    }

    // Clase que valida password
    public function test_password()
    {
        $password = validate::password('123456');
        $this->assertTrue($password);

        $password = validate::password('12345678910');
        $this->assertFalse($password);
    }
}