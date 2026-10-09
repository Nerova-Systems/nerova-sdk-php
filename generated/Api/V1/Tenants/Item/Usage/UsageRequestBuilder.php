<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Usage;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Tenants\Item\Usage\Limits\LimitsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Usage\Summary\SummaryRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/usage
*/
class UsageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The limits property
    */
    public function limits(): LimitsRequestBuilder {
        return new LimitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The summary property
    */
    public function summary(): SummaryRequestBuilder {
        return new SummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UsageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/usage');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
