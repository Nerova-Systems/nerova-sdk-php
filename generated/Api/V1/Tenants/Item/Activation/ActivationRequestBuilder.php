<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Activation;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Activate\ActivateRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\ConnectionSessions\ConnectionSessionsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Consents\ConsentsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Deactivate\DeactivateRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\IdentityConfirmations\IdentityConfirmationsRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Mandate\MandateRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Manifest\ManifestRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Pause\PauseRequestBuilder;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Provisioning\ProvisioningRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/activation
*/
class ActivationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The activate property
    */
    public function activate(): ActivateRequestBuilder {
        return new ActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The connectionSessions property
    */
    public function connectionSessions(): ConnectionSessionsRequestBuilder {
        return new ConnectionSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The consents property
    */
    public function consents(): ConsentsRequestBuilder {
        return new ConsentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deactivate property
    */
    public function deactivate(): DeactivateRequestBuilder {
        return new DeactivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identityConfirmations property
    */
    public function identityConfirmations(): IdentityConfirmationsRequestBuilder {
        return new IdentityConfirmationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mandate property
    */
    public function mandate(): MandateRequestBuilder {
        return new MandateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The manifest property
    */
    public function manifest(): ManifestRequestBuilder {
        return new ManifestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pause property
    */
    public function pause(): PauseRequestBuilder {
        return new PauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The provisioning property
    */
    public function provisioning(): ProvisioningRequestBuilder {
        return new ProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ActivationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/activation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
