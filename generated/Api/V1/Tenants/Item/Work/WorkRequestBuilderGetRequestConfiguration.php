<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Work;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkRequestBuilderGetQueryParameters.
     * @param string|null $cursor 
     * @param DateTime|null $from 
     * @param int|null $limit 
     * @param DateTime|null $to 
     * @return WorkRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $cursor = null, ?DateTime $from = null, ?int $limit = null, ?DateTime $to = null): WorkRequestBuilderGetQueryParameters {
        return new WorkRequestBuilderGetQueryParameters($cursor, $from, $limit, $to);
    }

}
