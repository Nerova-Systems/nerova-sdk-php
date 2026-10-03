<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Deliveries;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeliveriesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeliveriesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeliveriesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeliveriesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeliveriesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeliveriesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeliveriesRequestBuilderGetQueryParameters.
     * @param string|null $cursor 
     * @param string|null $endpointId 
     * @param int|null $limit 
     * @return DeliveriesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $cursor = null, ?string $endpointId = null, ?int $limit = null): DeliveriesRequestBuilderGetQueryParameters {
        return new DeliveriesRequestBuilderGetQueryParameters($cursor, $endpointId, $limit);
    }

}
