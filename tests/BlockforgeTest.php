<?php
/**
 * Tests for BlockForge
 */

use PHPUnit\Framework\TestCase;
use Blockforge\Blockforge;

class BlockforgeTest extends TestCase {
    private Blockforge $instance;

    protected function setUp(): void {
        $this->instance = new Blockforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
