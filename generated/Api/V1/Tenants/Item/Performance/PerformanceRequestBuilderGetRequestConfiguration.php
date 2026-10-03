<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Performance;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PerformanceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PerformanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PerformanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PerformanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PerformanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PerformanceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PerformanceRequestBuilderGetQueryParameters.
     * @param DateTime|null $from 
     * @param DateTime|null $to 
     * @return PerformanceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?DateTime $from = null, ?DateTime $to = null): PerformanceRequestBuilderGetQueryParameters {
        return new PerformanceRequestBuilderGetQueryParameters($from, $to);
    }

}
