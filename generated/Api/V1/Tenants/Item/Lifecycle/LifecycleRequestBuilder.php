<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Lifecycle;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Tenants\Item\Lifecycle\Item\WithStateItemRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/lifecycle
*/
class LifecycleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Nerova/Sdk.api.v1.tenants.item.lifecycle.item collection
     * @param string $state Unique identifier of the item
     * @return WithStateItemRequestBuilder
    */
    public function byState(string $state): WithStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['state'] = $state;
        return new WithStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LifecycleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/lifecycle');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
