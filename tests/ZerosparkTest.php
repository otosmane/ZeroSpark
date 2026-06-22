<?php
/**
 * Tests for ZeroSpark
 */

use PHPUnit\Framework\TestCase;
use Zerospark\Zerospark;

class ZerosparkTest extends TestCase {
    private Zerospark $instance;

    protected function setUp(): void {
        $this->instance = new Zerospark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zerospark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
