<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Activation\Activate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\PartnerActivationLifecycleRequest;
use Nerova\Sdk\Models\PartnerActivationReceiptResponse;
use Nerova\Sdk\Models\ProblemDetails;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/activation/activate
*/
class ActivateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ActivateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/activation/activate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Verifies every prerequisite and, if all pass, activates the tenant's employee and issues a receipt with 201. Activation fails closed: any unmet prerequisite rejects the command with 409 and the blocking codes.
     * @param PartnerActivationLifecycleRequest $body The request body
     * @param ActivateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerActivationReceiptResponse|null>
     * @throws Exception
    */
    public function post(PartnerActivationLifecycleRequest $body, ?ActivateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [PartnerActivationReceiptResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Verifies every prerequisite and, if all pass, activates the tenant's employee and issues a receipt with 201. Activation fails closed: any unmet prerequisite rejects the command with 409 and the blocking codes.
     * @param PartnerActivationLifecycleRequest $body The request body
     * @param ActivateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PartnerActivationLifecycleRequest $body, ?ActivateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ActivateRequestBuilder
    */
    public function withUrl(string $rawUrl): ActivateRequestBuilder {
        return new ActivateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
