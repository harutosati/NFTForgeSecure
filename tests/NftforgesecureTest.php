<?php
/**
 * Tests for NFTForgeSecure
 */

use PHPUnit\Framework\TestCase;
use Nftforgesecure\Nftforgesecure;

class NftforgesecureTest extends TestCase {
    private Nftforgesecure $instance;

    protected function setUp(): void {
        $this->instance = new Nftforgesecure(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftforgesecure::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
