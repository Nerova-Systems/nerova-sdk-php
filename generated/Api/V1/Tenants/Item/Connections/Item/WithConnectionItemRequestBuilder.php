<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\BaseUrl\BaseUrlRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\Credential\CredentialRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\Test\TestRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\Verify\VerifyRequestBuilder;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1ConnectionResponse;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/connections/{connectionId}
*/
class WithConnectionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The baseUrl property
    */
    public function baseUrl(): BaseUrlRequestBuilder {
        return new BaseUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The credential property
    */
    public function credential(): CredentialRequestBuilder {
        return new CredentialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The test property
    */
    public function test(): TestRequestBuilder {
        return new TestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The verify property
    */
    public function verify(): VerifyRequestBuilder {
        return new VerifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithConnectionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/connections/{connectionId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Revokes the connection and fails closed: dependent work stops immediately and the activation manifest reports the gap in blockingReasons. The revoked connection is a tombstone, not a lock: a later create for the same provider and environment resurrects it in place with the new payload.
     * @param WithConnectionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function delete(?WithConnectionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
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
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Returns one provider connection.
     * @param WithConnectionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1ConnectionResponse|null>
     * @throws Exception
    */
    public function get(?WithConnectionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1ConnectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Revokes the connection and fails closed: dependent work stops immediately and the activation manifest reports the gap in blockingReasons. The revoked connection is a tombstone, not a lock: a later create for the same provider and environment resurrects it in place with the new payload.
     * @param WithConnectionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithConnectionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/problem+json");
        return $requestInfo;
    }

    /**
     * Returns one provider connection.
     * @param WithConnectionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithConnectionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithConnectionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithConnectionItemRequestBuilder {
        return new WithConnectionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
