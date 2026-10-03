<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Item\Test;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1WebhookTestResponse;
use Nerova\Sdk\Models\TestTenantV1WebhookRequest;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/webhooks/{webhookId}/test
*/
class TestRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TestRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/webhooks/{webhookId}/test');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Enqueues one synthetic delivery of a realistic sample payload, signed with the endpoint's real secret and marked "livemode": false. It flows through the same persistence and retry path as production events. A paused endpoint is rejected with 400.
     * @param TestTenantV1WebhookRequest $body The request body
     * @param TestRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1WebhookTestResponse|null>
     * @throws Exception
    */
    public function post(TestTenantV1WebhookRequest $body, ?TestRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1WebhookTestResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Enqueues one synthetic delivery of a realistic sample payload, signed with the endpoint's real secret and marked "livemode": false. It flows through the same persistence and retry path as production events. A paused endpoint is rejected with 400.
     * @param TestTenantV1WebhookRequest $body The request body
     * @param TestRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TestTenantV1WebhookRequest $body, ?TestRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TestRequestBuilder
    */
    public function withUrl(string $rawUrl): TestRequestBuilder {
        return new TestRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
