<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Webhooks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Catalog\CatalogRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Deliveries\DeliveriesRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Item\WithWebhookItemRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Stats\StatsRequestBuilder;
use Nerova\Sdk\Models\CreateTenantV1WebhookRequest;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1WebhookResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/webhooks
*/
class WebhooksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The catalog property
    */
    public function catalog(): CatalogRequestBuilder {
        return new CatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deliveries property
    */
    public function deliveries(): DeliveriesRequestBuilder {
        return new DeliveriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The stats property
    */
    public function stats(): StatsRequestBuilder {
        return new StatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Nerova/Sdk.api.v1.tenants.item.webhooks.item collection
     * @param string $webhookId Unique identifier of the item
     * @return WithWebhookItemRequestBuilder
    */
    public function byWebhookId(string $webhookId): WithWebhookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['webhookId'] = $webhookId;
        return new WithWebhookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WebhooksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/webhooks');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the tenant's webhook endpoints in the calling key's environment, newest first, with each endpoint's most recent delivery outcome. Signing secrets are masked.
     * @param WebhooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<TenantV1WebhookResponse>|null>
     * @throws Exception
    */
    public function get(?WebhooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [TenantV1WebhookResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a webhook endpoint in the calling key's environment. The response is the only time the signing secret is returned in cleartext; store it immediately. The endpoint's API version is pinned at creation.
     * @param CreateTenantV1WebhookRequest $body The request body
     * @param WebhooksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1WebhookResponse|null>
     * @throws Exception
    */
    public function post(CreateTenantV1WebhookRequest $body, ?WebhooksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
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
     * Returns the tenant's webhook endpoints in the calling key's environment, newest first, with each endpoint's most recent delivery outcome. Signing secrets are masked.
     * @param WebhooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WebhooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Creates a webhook endpoint in the calling key's environment. The response is the only time the signing secret is returned in cleartext; store it immediately. The endpoint's API version is pinned at creation.
     * @param CreateTenantV1WebhookRequest $body The request body
     * @param WebhooksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateTenantV1WebhookRequest $body, ?WebhooksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WebhooksRequestBuilder
    */
    public function withUrl(string $rawUrl): WebhooksRequestBuilder {
        return new WebhooksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
