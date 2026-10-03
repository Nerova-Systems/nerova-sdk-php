<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Conversations;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConversationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConversationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConversationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConversationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConversationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConversationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConversationsRequestBuilderGetQueryParameters.
     * @param string|null $cursor 
     * @param DateTime|null $from 
     * @param int|null $limit 
     * @param DateTime|null $to 
     * @return ConversationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $cursor = null, ?DateTime $from = null, ?int $limit = null, ?DateTime $to = null): ConversationsRequestBuilderGetQueryParameters {
        return new ConversationsRequestBuilderGetQueryParameters($cursor, $from, $limit, $to);
    }

}
