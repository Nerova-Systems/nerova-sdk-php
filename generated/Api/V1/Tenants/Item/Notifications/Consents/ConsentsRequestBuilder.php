<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Notifications\Consents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Notifications\Consents\Item\WithRecipientReferenceItemRequestBuilder;
use Nerova\Sdk\Models\PartnerRuntimeActionResponse;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\UpsertPartnerNotificationConsentCommand;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/notifications/consents
*/
class ConsentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Nerova/Sdk.api.v1.tenants.item.notifications.consents.item collection
     * @param string $recipientReference Unique identifier of the item
     * @return WithRecipientReferenceItemRequestBuilder
    */
    public function byRecipientReference(string $recipientReference): WithRecipientReferenceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['recipientReference'] = $recipientReference;
        return new WithRecipientReferenceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConsentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/notifications/consents');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Record notification consent
     * @param UpsertPartnerNotificationConsentCommand $body The request body
     * @param ConsentsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerRuntimeActionResponse|null>
     * @throws Exception
    */
    public function put(UpsertPartnerNotificationConsentCommand $body, ?ConsentsRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
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
     * Record notification consent
     * @param UpsertPartnerNotificationConsentCommand $body The request body
     * @param ConsentsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpsertPartnerNotificationConsentCommand $body, ?ConsentsRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConsentsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConsentsRequestBuilder {
        return new ConsentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
