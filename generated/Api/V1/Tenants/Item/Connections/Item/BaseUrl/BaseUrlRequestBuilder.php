<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\BaseUrl;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\ReplaceTenantV1ConnectionBaseUrlRequest;
use Nerova\Sdk\Models\TenantV1ConnectionResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/connections/{connectionId}/base-url
*/
class BaseUrlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BaseUrlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/connections/{connectionId}/base-url');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Rotates a Provider API v1 connection's base URL with validate-before-swap semantics: the new URL (and, when supplied, new credential) is probed atomically before anything is stored, and a failing probe leaves the connection untouched. A base URL change demotes certificationState to Unverified and restarts the connection at PendingValidation — conformance must be re-verified against the new endpoint before production activation. A base URL byte-identical after URI normalization is a no-op rotation and skips the demotion.
     * @param ReplaceTenantV1ConnectionBaseUrlRequest $body The request body
     * @param BaseUrlRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1ConnectionResponse|null>
     * @throws Exception
    */
    public function put(ReplaceTenantV1ConnectionBaseUrlRequest $body, ?BaseUrlRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1ConnectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Rotates a Provider API v1 connection's base URL with validate-before-swap semantics: the new URL (and, when supplied, new credential) is probed atomically before anything is stored, and a failing probe leaves the connection untouched. A base URL change demotes certificationState to Unverified and restarts the connection at PendingValidation — conformance must be re-verified against the new endpoint before production activation. A base URL byte-identical after URI normalization is a no-op rotation and skips the demotion.
     * @param ReplaceTenantV1ConnectionBaseUrlRequest $body The request body
     * @param BaseUrlRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(ReplaceTenantV1ConnectionBaseUrlRequest $body, ?BaseUrlRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return BaseUrlRequestBuilder
    */
    public function withUrl(string $rawUrl): BaseUrlRequestBuilder {
        return new BaseUrlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
