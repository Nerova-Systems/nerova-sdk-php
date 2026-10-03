<?php

namespace Nerova\Sdk\Api\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Context\ContextRequestBuilder;
use Nerova\Sdk\Api\V1\Status\StatusRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\TenantsRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The context property
    */
    public function context(): ContextRequestBuilder {
        return new ContextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The status property
    */
    public function status(): StatusRequestBuilder {
        return new StatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tenants property
    */
    public function tenants(): TenantsRequestBuilder {
        return new TenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
