<?php

declare(strict_types=1);

use SprykerShop\Service\OtelShopApplicationInstrumentation\OpenTelemetry\ShopApplicationInstrumentation;
use Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentation;
use Spryker\Shared\Opentelemetry\Request\RequestProcessor;

if (extension_loaded('opentelemetry') === false) {
    error_log('The opentelemetry extension must be loaded in order to autoload the OpenTelemetry Spryker Framework auto-instrumentation', E_USER_WARNING);

    return;
}

ShopApplicationInstrumentation::register(new CachedInstrumentation(), new RequestProcessor());

