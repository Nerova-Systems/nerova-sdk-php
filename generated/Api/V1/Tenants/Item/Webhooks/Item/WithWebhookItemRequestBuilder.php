<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Item\RotateSecret\RotateSecretRequestBuilder;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1WebhookResponse;
use Nerova\Sdk\Models\UpdateTenantV1WebhookRequest;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/webhooks/{webhookId}
*/
class WithWebhookItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The rotateSecret property
    */
    public function rotateSecret(): RotateSecretRequestBuilder {
        return new RotateSecretRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithWebhookItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/webhooks/{webhookId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes the endpoint permanently. In-flight deliveries stop; the delivery ledger keeps its history until retention expires.
     * @param WithWebhookItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function delete(?WithWebhookItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '409' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '503' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Returns one webhook endpoint. The signing secret is masked; an endpoint in the other environment returns 404.
     * @param WithWebhookItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1WebhookResponse|null>
     * @throws Exception
    */
    public function get(?WithWebhookItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '409' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '503' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1WebhookResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Replaces the endpoint's URL, description, and event subscriptions. The signing secret and pinned API version are unchanged; replaying the same update is naturally idempotent.
     * @param UpdateTenantV1WebhookRequest $body The request body
     * @param WithWebhookItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1WebhookResponse|null>
     * @throws Exception
    */
    public function put(UpdateTenantV1WebhookRequest $body, ?WithWebhookItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '409' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '503' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1WebhookResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes the endpoint permanently. In-flight deliveries stop; the delivery ledger keeps its history until retention expires.
     * @param WithWebhookItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithWebhookItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns one webhook endpoint. The signing secret is masked; an endpoint in the other environment returns 404.
     * @param WithWebhookItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithWebhookItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Replaces the endpoint's URL, description, and event subscriptions. The signing secret and pinned API version are unchanged; replaying the same update is naturally idempotent.
     * @param UpdateTenantV1WebhookRequest $body The request body
     * @param WithWebhookItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateTenantV1WebhookRequest $body, ?WithWebhookItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithWebhookItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithWebhookItemRequestBuilder {
        return new WithWebhookItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
