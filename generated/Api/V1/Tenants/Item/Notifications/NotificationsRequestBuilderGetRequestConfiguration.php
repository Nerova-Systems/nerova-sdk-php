<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Notifications;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NotificationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NotificationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NotificationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NotificationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NotificationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NotificationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NotificationsRequestBuilderGetQueryParameters.
     * @param string|null $cursor 
     * @param DateTime|null $from 
     * @param int|null $limit 
     * @param DateTime|null $to 
     * @return NotificationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $cursor = null, ?DateTime $from = null, ?int $limit = null, ?DateTime $to = null): NotificationsRequestBuilderGetQueryParameters {
        return new NotificationsRequestBuilderGetQueryParameters($cursor, $from, $limit, $to);
    }

}
