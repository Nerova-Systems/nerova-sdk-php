<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Lifecycle\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1LifecycleRequest;
use Nerova\Sdk\Models\TenantV1Response;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/lifecycle/{state}
*/
class WithStateItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithStateItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/lifecycle/{state}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Moves the tenant to Active, Suspended, or Archived with an audited reason. Suspended and Archived stop the tenant's AI immediately; Active resumes it. This administrative lifecycle is distinct from the employee's activation lifecycle.
     * @param TenantV1LifecycleRequest $body The request body
     * @param WithStateItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1Response|null>
     * @throws Exception
    */
    public function post(TenantV1LifecycleRequest $body, ?WithStateItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '409' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '412' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '503' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1Response::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Moves the tenant to Active, Suspended, or Archived with an audited reason. Suspended and Archived stop the tenant's AI immediately; Active resumes it. This administrative lifecycle is distinct from the employee's activation lifecycle.
     * @param TenantV1LifecycleRequest $body The request body
     * @param WithStateItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TenantV1LifecycleRequest $body, ?WithStateItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithStateItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithStateItemRequestBuilder {
        return new WithStateItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
