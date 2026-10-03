<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Usage\Summary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SummaryRequestBuilderGetQueryParameters.
     * @param int|null $month 
     * @param int|null $year 
     * @return SummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $month = null, ?int $year = null): SummaryRequestBuilderGetQueryParameters {
        return new SummaryRequestBuilderGetQueryParameters($month, $year);
    }

}
