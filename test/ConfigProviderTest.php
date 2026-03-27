<?php

declare(strict_types=1);

namespace LmcTest\Api\ContentNegotiation;

use Lmc\Api\ContentNegotiation\ConfigProvider;
use PHPUnit\Framework\TestCase;

final class ConfigProviderTest extends TestCase
{
    public function testConfigProvider(): void
    {
        $configProvider = new ConfigProvider();
        $this->assertIsArray($configProvider());
        $this->assertArrayHasKey('dependencies', $configProvider());
        $this->assertArrayHasKey('lmc_api', $configProvider());
    }
}
