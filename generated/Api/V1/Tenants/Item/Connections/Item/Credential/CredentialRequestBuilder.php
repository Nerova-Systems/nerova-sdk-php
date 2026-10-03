<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Connections\Item\Credential;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\ReplaceTenantV1ConnectionCredentialRequest;
use Nerova\Sdk\Models\TenantV1ConnectionResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/connections/{connectionId}/credential
*/
class CredentialRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CredentialRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/connections/{connectionId}/credential');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Rotates the connection's credential with validate-before-swap semantics and an incremented credentialVersion. A credential that fails validation leaves the existing one untouched.
     * @param ReplaceTenantV1ConnectionCredentialRequest $body The request body
     * @param CredentialRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1ConnectionResponse|null>
     * @throws Exception
    */
    public function put(ReplaceTenantV1ConnectionCredentialRequest $body, ?CredentialRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1ConnectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Rotates the connection's credential with validate-before-swap semantics and an incremented credentialVersion. A credential that fails validation leaves the existing one untouched.
     * @param ReplaceTenantV1ConnectionCredentialRequest $body The request body
     * @param CredentialRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(ReplaceTenantV1ConnectionCredentialRequest $body, ?CredentialRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CredentialRequestBuilder
    */
    public function withUrl(string $rawUrl): CredentialRequestBuilder {
        return new CredentialRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
