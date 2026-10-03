<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Conversations\Item\Messages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\PartnerRuntimeActionResponse;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\SendPartnerRuntimeMessageCommand;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/conversations/{conversationId}/messages
*/
class MessagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MessagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/conversations/{conversationId}/messages');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Sends a text message from the employee into an open conversation; the channel must be ready and the conversation's customer-service window open, otherwise the send is rejected with 409. If delivery cannot be verified, 409 partner.action_outcome_unknown is returned: read the conversation back before acting again.
     * @param SendPartnerRuntimeMessageCommand $body The request body
     * @param MessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerRuntimeActionResponse|null>
     * @throws Exception
    */
    public function post(SendPartnerRuntimeMessageCommand $body, ?MessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [PartnerRuntimeActionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Sends a text message from the employee into an open conversation; the channel must be ready and the conversation's customer-service window open, otherwise the send is rejected with 409. If delivery cannot be verified, 409 partner.action_outcome_unknown is returned: read the conversation back before acting again.
     * @param SendPartnerRuntimeMessageCommand $body The request body
     * @param MessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SendPartnerRuntimeMessageCommand $body, ?MessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MessagesRequestBuilder
    */
    public function withUrl(string $rawUrl): MessagesRequestBuilder {
        return new MessagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
