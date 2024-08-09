<?php

declare(strict_types=1);

use SprykerShop\Service\OtelShopApplicationInstrumentation\OpenTelemetry\ShopApplicationInstrumentation;

if (extension_loaded('opentelemetry') === false) {
    trigger_error('The opentelemetry extension must be loaded in order to autoload the OpenTelemetry Spryker Framework auto-instrumentation', E_USER_WARNING);

    return;
}

/**
 * @TO-DO Adjust
 */
$cachedInstrumentation = (new \Spryker\Zed\Opentelemetry\Business\Generator\Instrumentation\CachedInstrumentation())
    ->getCachedInstrumentation();
$request = (new \Spryker\Zed\Opentelemetry\Business\Generator\Request\RequestProcessor())
    ->getRequest();

ShopApplicationInstrumentation::register($cachedInstrumentation, $request);

