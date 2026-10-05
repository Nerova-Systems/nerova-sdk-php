<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Channels\Whatsapp\Onboarding;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1WhatsAppOnboardingResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/channels/whatsapp/onboarding
*/
class OnboardingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new OnboardingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/channels/whatsapp/onboarding');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the tenant's WhatsApp onboarding checklist: whether the tenant has connected WhatsApp, the Meta business verification status, and five ordered steps (Connect, VerifyBusiness, CompleteProfile, PublishFirstFlow, SendTestMessage), each Complete, Current, or Upcoming. Exactly one step is Current until all are Complete. Meta's detailed verification steps happen in Meta Business Suite; this endpoint reports status and the next action.
     * @param OnboardingRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1WhatsAppOnboardingResponse|null>
     * @throws Exception
    */
    public function get(?OnboardingRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '503' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1WhatsAppOnboardingResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the tenant's WhatsApp onboarding checklist: whether the tenant has connected WhatsApp, the Meta business verification status, and five ordered steps (Connect, VerifyBusiness, CompleteProfile, PublishFirstFlow, SendTestMessage), each Complete, Current, or Upcoming. Exactly one step is Current until all are Complete. Meta's detailed verification steps happen in Meta Business Suite; this endpoint reports status and the next action.
     * @param OnboardingRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnboardingRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnboardingRequestBuilder
    */
    public function withUrl(string $rawUrl): OnboardingRequestBuilder {
        return new OnboardingRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
