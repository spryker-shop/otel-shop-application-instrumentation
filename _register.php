<?php

declare(strict_types=1);

use SprykerShop\Service\OtelShopApplicationInstrumentation\OpenTelemetry\ShopApplicationInstrumentation;
use Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentation;
use Spryker\Shared\Opentelemetry\Request\RequestProcessor;

if (extension_loaded('opentelemetry') === false) {
    return;
}

ShopApplicationInstrumentation::register(new CachedInstrumentation(), new RequestProcessor());

