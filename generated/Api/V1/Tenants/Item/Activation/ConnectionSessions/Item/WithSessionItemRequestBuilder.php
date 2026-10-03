<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Activation\ConnectionSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\ConnectionSessions\Item\Complete\CompleteRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/activation/connection-sessions/{sessionId}
*/
class WithSessionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The complete property
    */
    public function complete(): CompleteRequestBuilder {
        return new CompleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithSessionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/activation/connection-sessions/{sessionId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
