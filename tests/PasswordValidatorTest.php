<?php

namespace App\tests;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/PasswordValidator.php';

use App\PasswordValidator;

use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    public function testValidation()
    {
        $this->assertTrue(PasswordValidator::validate('ValidPass1'));
        $this->assertFalse(PasswordValidator::validate('invalid'));
    }
}
