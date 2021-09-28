<?php

namespace Assumilhig\LaravelKeyGenerator\Tests;

use Assumilhig\LaravelKeyGenerator\LaravelKeyGenerator;
use Illuminate\Support\Str;

class KeyGeneratorTest extends TestCase
{
    public function test_it_can_generate_a_new_key(): void
    {
        $key = LaravelKeyGenerator::generate('test');

        $this->assertTrue(str_contains($key, 'test'));
    }

    public function test_it_can_generate_a_new_key_using_the_string_macro()
    {
        $key = Str::key('test');

        $this->assertTrue(str_contains($key, 'test'));
    }
}
