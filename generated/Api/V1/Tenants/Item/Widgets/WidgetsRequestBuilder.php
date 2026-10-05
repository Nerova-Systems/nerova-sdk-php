<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Widgets;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Tenants\Item\Widgets\Sessions\SessionsRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/widgets
*/
class WidgetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The sessions property
    */
    public function sessions(): SessionsRequestBuilder {
        return new SessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WidgetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/widgets');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
