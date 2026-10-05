<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Channels\Whatsapp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Channels\Whatsapp\Onboarding\OnboardingRequestBuilder;
use Nerova\Sdk\Models\ProblemDetails;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/channels/whatsapp
*/
class WhatsappRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The onboarding property
    */
    public function onboarding(): OnboardingRequestBuilder {
        return new OnboardingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WhatsappRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/channels/whatsapp');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Disconnects the tenant's WhatsApp number from Nerova so the merchant can remove it or connect a different one. Nerova releases the number at Meta (a number paired with the WhatsApp Business App is left paired), deletes the stored WhatsApp account and its access token, and stops routing messages to the receptionist. Returns 204 with no body. A tenant with no WhatsApp number connected is rejected with 409 and code partner.whatsapp_not_connected. A Meta failure never blocks the disconnect: the connection is removed either way and the number may need to be released manually in Meta. Nerova publishes channel.disconnected with source api once the disconnect succeeds. Requires a Live key (nrv_live_) with the channel:manage scope; a tenant the calling key has not been granted is rejected with 403 and code partner.merchant_not_available.
     * @param WhatsappRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WhatsappRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Disconnects the tenant's WhatsApp number from Nerova so the merchant can remove it or connect a different one. Nerova releases the number at Meta (a number paired with the WhatsApp Business App is left paired), deletes the stored WhatsApp account and its access token, and stops routing messages to the receptionist. Returns 204 with no body. A tenant with no WhatsApp number connected is rejected with 409 and code partner.whatsapp_not_connected. A Meta failure never blocks the disconnect: the connection is removed either way and the number may need to be released manually in Meta. Nerova publishes channel.disconnected with source api once the disconnect succeeds. Requires a Live key (nrv_live_) with the channel:manage scope; a tenant the calling key has not been granted is rejected with 403 and code partner.merchant_not_available.
     * @param WhatsappRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WhatsappRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WhatsappRequestBuilder
    */
    public function withUrl(string $rawUrl): WhatsappRequestBuilder {
        return new WhatsappRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
