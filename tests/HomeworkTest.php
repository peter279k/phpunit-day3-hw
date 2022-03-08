<?php

namespace Lab\Tests;

use Lab\Homework;
use PHPUnit\Framework\TestCase;

class HomeworkTest extends TestCase
{
    /**
     * @requires extension gmp
     */
    public function testAddGmpBigNumber(): void
    {
        $hw = new Homework();
        $res = $hw->addGmpBigNumber("123456789012345", "76543210987655");

        $this->assertSame("200000000000000", $res);
    }

    public function testConcatString(): void
    {
        $hw = new Homework();
        $res = $hw->concatString('a', 'b');

        $this->assertSame("ab", $res);

        $this->markTestIncomplete('concatString method is incomplete.');
    }

    /**
     * @small
    */
    public function testWait(): void
    {
        $hw = new Homework();
        $res = $hw->wait(1);
 
        $this->assertNull($res);
    }
}
