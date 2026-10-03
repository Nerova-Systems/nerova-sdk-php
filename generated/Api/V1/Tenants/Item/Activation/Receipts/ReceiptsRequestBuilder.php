<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Activation\Receipts;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Nerova\Sdk\Api\V1\Tenants\Item\Activation\Receipts\Item\WithReceiptItemRequestBuilder;

/**
 * Builds and executes requests for operations under /api/v1/tenants/{tenantId}/activation/receipts
*/
class ReceiptsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Nerova/Sdk.api.v1.tenants.item.activation.receipts.item collection
     * @param string $receiptId Unique identifier of the item
     * @return WithReceiptItemRequestBuilder
    */
    public function byReceiptId(string $receiptId): WithReceiptItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['receiptId'] = $receiptId;
        return new WithReceiptItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReceiptsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/v1/tenants/{tenantId}/activation/receipts');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
