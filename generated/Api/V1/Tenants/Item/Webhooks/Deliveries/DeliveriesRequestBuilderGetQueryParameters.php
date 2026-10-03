<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Webhooks\Deliveries;

/**
 * Returns the delivery ledger for the calling key's environment, newest first, as a cursor page. Pass the returned nextCursor to fetch the next page; a null nextCursor means the last page. Optionally scope to one endpoint with endpointId.
*/
class DeliveriesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $cursor 
    */
    public ?string $cursor = null;
    
    /**
     * @var string|null $endpointId 
    */
    public ?string $endpointId = null;
    
    /**
     * @var int|null $limit 
    */
    public ?int $limit = null;
    
    /**
     * Instantiates a new DeliveriesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $cursor 
     * @param string|null $endpointId 
     * @param int|null $limit 
    */
    public function __construct(?string $cursor = null, ?string $endpointId = null, ?int $limit = null) {
        $this->cursor = $cursor;
        $this->endpointId = $endpointId;
        $this->limit = $limit;
    }

}
