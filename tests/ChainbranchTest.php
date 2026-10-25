<?php
/**
 * Tests for ChainBranch
 */

use PHPUnit\Framework\TestCase;
use Chainbranch\Chainbranch;

class ChainbranchTest extends TestCase {
    private Chainbranch $instance;

    protected function setUp(): void {
        $this->instance = new Chainbranch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainbranch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
