<?php

namespace Serenity\Tests\Services;

use PHPUnit\Framework\TestCase;
use Serenity\Services\CleaningService;

class CleaningServiceTest extends TestCase
{
    private CleaningService $cleaningService;

    protected function setUp(): void
    {
        $this->cleaningService = new CleaningService();
    }

    public function testGetAllServicesReturnsArray(): void
    {
        $services = $this->cleaningService->getAllServices();
        
        $this->assertIsArray($services);
        $this->assertNotEmpty($services);
    }

    public function testGetServiceByIdReturnsCorrectService(): void
    {
        $service = $this->cleaningService->getServiceById(1);
        
        $this->assertIsArray($service);
        $this->assertEquals(1, $service['id']);
        $this->assertArrayHasKey('name', $service);
        $this->assertArrayHasKey('price', $service);
    }

    public function testGetServiceByIdReturnsNullForInvalidId(): void
    {
        $service = $this->cleaningService->getServiceById(999);
        
        $this->assertNull($service);
    }

    public function testCalculatePriceReturnsCorrectValue(): void
    {
        $price = $this->cleaningService->calculatePrice(1, 50.0);
        
        $this->assertIsFloat($price);
        $this->assertGreaterThan(0, $price);
    }

    public function testCalculatePriceReturnsNullForInvalidService(): void
    {
        $price = $this->cleaningService->calculatePrice(999, 50.0);
        
        $this->assertNull($price);
    }
}
