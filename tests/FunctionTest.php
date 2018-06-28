<?php

namespace Openset\Tests;

use PHPUnit\Framework\TestCase;

final class FunctionTest extends TestCase
{
    public function testIsCli()
    {
        $this->assertEquals(is_cli(), true);
    }
}
