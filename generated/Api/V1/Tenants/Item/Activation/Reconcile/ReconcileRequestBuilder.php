<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Activation\Reconcile;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\PartnerActivationLifecycleRequest;
use Nerova\Sdk\Models\PartnerActivationMutationResponse;
use Nerova\Sdk\Models\ProblemDetails;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/activation/reconcile
*/
class ReconcileRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReconcileRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/activation/reconcile');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Re-runs verification for an active tenant and refreshes evidence, recovering a Degraded employee when the underlying issue is resolved.
     * @param PartnerActivationLifecycleRequest $body The request body
     * @param ReconcileRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerActivationMutationResponse|null>
     * @throws Exception
    */
    public function post(PartnerActivationLifecycleRequest $body, ?ReconcileRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [PartnerActivationMutationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Re-runs verification for an active tenant and refreshes evidence, recovering a Degraded employee when the underlying issue is resolved.
     * @param PartnerActivationLifecycleRequest $body The request body
     * @param ReconcileRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PartnerActivationLifecycleRequest $body, ?ReconcileRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReconcileRequestBuilder
    */
    public function withUrl(string $rawUrl): ReconcileRequestBuilder {
        return new ReconcileRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
