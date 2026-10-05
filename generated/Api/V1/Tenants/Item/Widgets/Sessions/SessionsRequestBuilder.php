<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Widgets\Sessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Models\CreateTenantV1WidgetSessionRequest;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1WidgetSessionResponse;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/widgets/sessions
*/
class SessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/widgets/sessions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates a short-lived (15 minute) session for an embeddable widget and returns the framable url to render in your page. The origin must be one of the origins your organization has registered for embedding, and only that origin may frame the session. Widgets are read-only: they show the tenant's WhatsApp channel status and setup checklist and never carry credentials. A replay of the same Idempotency-Key and request returns the same session; a conflicting replay is rejected with 409. Requires a Live key (nrv_live_), the only kind of key issued.
     * @param CreateTenantV1WidgetSessionRequest $body The request body
     * @param SessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1WidgetSessionResponse|null>
     * @throws Exception
    */
    public function post(CreateTenantV1WidgetSessionRequest $body, ?SessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '409' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '422' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '503' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1WidgetSessionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a short-lived (15 minute) session for an embeddable widget and returns the framable url to render in your page. The origin must be one of the origins your organization has registered for embedding, and only that origin may frame the session. Widgets are read-only: they show the tenant's WhatsApp channel status and setup checklist and never carry credentials. A replay of the same Idempotency-Key and request returns the same session; a conflicting replay is rejected with 409. Requires a Live key (nrv_live_), the only kind of key issued.
     * @param CreateTenantV1WidgetSessionRequest $body The request body
     * @param SessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateTenantV1WidgetSessionRequest $body, ?SessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SessionsRequestBuilder {
        return new SessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
