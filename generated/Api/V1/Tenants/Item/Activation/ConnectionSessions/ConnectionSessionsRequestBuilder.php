<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Activation\ConnectionSessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\PartnerActivationConnectionSessionRequest;
use Nerova\Sdk\Models\PartnerActivationConnectionSessionResponse;
use Nerova\Sdk\Models\ProblemDetails;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/activation/connection-sessions
*/
class ConnectionSessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConnectionSessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/activation/connection-sessions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Starts a channel connection session the merchant completes to bind their channel account; WhatsApp is the only channel in the current contract. Returns 201 with the session to hand to the channel flow.
     * @param PartnerActivationConnectionSessionRequest $body The request body
     * @param ConnectionSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerActivationConnectionSessionResponse|null>
     * @throws Exception
    */
    public function post(PartnerActivationConnectionSessionRequest $body, ?ConnectionSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [PartnerActivationConnectionSessionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Starts a channel connection session the merchant completes to bind their channel account; WhatsApp is the only channel in the current contract. Returns 201 with the session to hand to the channel flow.
     * @param PartnerActivationConnectionSessionRequest $body The request body
     * @param ConnectionSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PartnerActivationConnectionSessionRequest $body, ?ConnectionSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConnectionSessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConnectionSessionsRequestBuilder {
        return new ConnectionSessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
