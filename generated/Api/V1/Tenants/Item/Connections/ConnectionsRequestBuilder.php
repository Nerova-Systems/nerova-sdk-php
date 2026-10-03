<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Connections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\WithConnectionItemRequestBuilder;
use Nerova\Sdk\Models\CreateTenantV1ConnectionRequest;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1ConnectionResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/connections
*/
class ConnectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Nerova/Sdk.api.v1.tenants.item.connections.item collection
     * @param string $connectionId Unique identifier of the item
     * @return WithConnectionItemRequestBuilder
    */
    public function byConnectionId(string $connectionId): WithConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['connectionId'] = $connectionId;
        return new WithConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConnectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/connections');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the tenant's provider connections in the calling key's environment.
     * @param ConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<TenantV1ConnectionResponse>|null>
     * @throws Exception
    */
    public function get(?ConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
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
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [TenantV1ConnectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a provider connection with validate-before-store semantics: the credential is verified against the provider first and an invalid credential is rejected without being stored. An existing non-revoked connection for the same provider and environment is rejected with 409; a revoked one is resurrected in place with the full request payload (same connection id, certification demoted to Unverified, state PendingValidation).
     * @param CreateTenantV1ConnectionRequest $body The request body
     * @param ConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1ConnectionResponse|null>
     * @throws Exception
    */
    public function post(CreateTenantV1ConnectionRequest $body, ?ConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1ConnectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the tenant's provider connections in the calling key's environment.
     * @param ConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Creates a provider connection with validate-before-store semantics: the credential is verified against the provider first and an invalid credential is rejected without being stored. An existing non-revoked connection for the same provider and environment is rejected with 409; a revoked one is resurrected in place with the full request payload (same connection id, certification demoted to Unverified, state PendingValidation).
     * @param CreateTenantV1ConnectionRequest $body The request body
     * @param ConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateTenantV1ConnectionRequest $body, ?ConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConnectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
