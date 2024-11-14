<?php

declare(strict_types=1);

use OpenTelemetry\SDK\Sdk;
use SprykerShop\Service\OtelShopApplicationInstrumentation\OpenTelemetry\ShopApplicationInstrumentation;

if (Sdk::isDisabled()) {
    return;
}

if (extension_loaded('opentelemetry') === false) {
    error_log('The opentelemetry extension must be loaded in order to autoload the OpenTelemetry Spryker Framework auto-instrumentation', E_USER_WARNING);

    return;
}

ShopApplicationInstrumentation::register();

