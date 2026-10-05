<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\ActivationRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activity\ActivityRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Capabilities\CapabilitiesRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Channels\ChannelsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Connections\ConnectionsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Conversations\ConversationsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Employee\EmployeeRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Incidents\IncidentsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Lifecycle\LifecycleRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Mandate\MandateRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Memory\MemoryRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Notifications\NotificationsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Performance\PerformanceRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Usage\UsageRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\WebhooksRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Widgets\WidgetsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Work\WorkRequestBuilder;
use Nerova\Sdk\Models\ProblemDetails;
use Nerova\Sdk\Models\TenantV1Response;
use Nerova\Sdk\Models\UpdateTenantV1Request;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}
*/
class WithTenantItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The activation property
    */
    public function activation(): ActivationRequestBuilder {
        return new ActivationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The activity property
    */
    public function activity(): ActivityRequestBuilder {
        return new ActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The capabilities property
    */
    public function capabilities(): CapabilitiesRequestBuilder {
        return new CapabilitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The channels property
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The connections property
    */
    public function connections(): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conversations property
    */
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The employee property
    */
    public function employee(): EmployeeRequestBuilder {
        return new EmployeeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incidents property
    */
    public function incidents(): IncidentsRequestBuilder {
        return new IncidentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lifecycle property
    */
    public function lifecycle(): LifecycleRequestBuilder {
        return new LifecycleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mandate property
    */
    public function mandate(): MandateRequestBuilder {
        return new MandateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memory property
    */
    public function memory(): MemoryRequestBuilder {
        return new MemoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The notifications property
    */
    public function notifications(): NotificationsRequestBuilder {
        return new NotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The performance property
    */
    public function performance(): PerformanceRequestBuilder {
        return new PerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The usage property
    */
    public function usage(): UsageRequestBuilder {
        return new UsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The webhooks property
    */
    public function webhooks(): WebhooksRequestBuilder {
        return new WebhooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The widgets property
    */
    public function widgets(): WidgetsRequestBuilder {
        return new WidgetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The work property
    */
    public function work(): WorkRequestBuilder {
        return new WorkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithTenantItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns one tenant. A tenant the calling key has not been granted returns 404.
     * @param WithTenantItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1Response|null>
     * @throws Exception
    */
    public function get(?WithTenantItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1Response::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates the tenant's display name and increments its version. The externalReference is immutable.
     * @param UpdateTenantV1Request $body The request body
     * @param WithTenantItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantV1Response|null>
     * @throws Exception
    */
    public function patch(UpdateTenantV1Request $body, ?WithTenantItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
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
        return $this->requestAdapter->sendAsync($requestInfo, [TenantV1Response::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns one tenant. A tenant the calling key has not been granted returns 404.
     * @param WithTenantItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithTenantItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates the tenant's display name and increments its version. The externalReference is immutable.
     * @param UpdateTenantV1Request $body The request body
     * @param WithTenantItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UpdateTenantV1Request $body, ?WithTenantItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return WithTenantItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithTenantItemRequestBuilder {
        return new WithTenantItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
