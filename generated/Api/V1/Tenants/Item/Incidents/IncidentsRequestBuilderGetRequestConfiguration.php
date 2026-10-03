<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Incidents;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IncidentsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IncidentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IncidentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IncidentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IncidentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IncidentsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IncidentsRequestBuilderGetQueryParameters.
     * @param string|null $cursor 
     * @param DateTime|null $from 
     * @param int|null $limit 
     * @param string|null $status 
     * @param DateTime|null $to 
     * @return IncidentsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $cursor = null, ?DateTime $from = null, ?int $limit = null, ?string $status = null, ?DateTime $to = null): IncidentsRequestBuilderGetQueryParameters {
        return new IncidentsRequestBuilderGetQueryParameters($cursor, $from, $limit, $status, $to);
    }

}
