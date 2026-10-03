<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Usage\Summary;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantUsageSummaryResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/usage/summary
*/
class SummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/usage/summary{?Month*,Year*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the tenant's rebilling counters for one UTC calendar month (default: the current month): tokens consumed (voice surcharge included), recorded voice seconds, bookings created (Nerova scheduler bookings plus appointments the AI created on your platform), bookings cancelled by the AI, and AI conversations started. Counts only - the wholesale rate lives on the organization invoice and retail pricing is yours.
     * @param SummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantUsageSummaryResponse|null>
     * @throws Exception
    */
    public function get(?SummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantUsageSummaryResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the tenant's rebilling counters for one UTC calendar month (default: the current month): tokens consumed (voice surcharge included), recorded voice seconds, bookings created (Nerova scheduler bookings plus appointments the AI created on your platform), bookings cancelled by the AI, and AI conversations started. Counts only - the wholesale rate lives on the organization invoice and retail pricing is yours.
     * @param SummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): SummaryRequestBuilder {
        return new SummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
