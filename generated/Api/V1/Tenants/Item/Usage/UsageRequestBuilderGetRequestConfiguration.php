<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Usage;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UsageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UsageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UsageRequestBuilderGetQueryParameters.
     * @param int|null $includedAllowance 
     * @param DateTime|null $periodEnd 
     * @param DateTime|null $periodStart 
     * @return UsageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $includedAllowance = null, ?DateTime $periodEnd = null, ?DateTime $periodStart = null): UsageRequestBuilderGetQueryParameters {
        return new UsageRequestBuilderGetQueryParameters($includedAllowance, $periodEnd, $periodStart);
    }

}
