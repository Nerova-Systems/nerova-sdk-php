<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Incidents;

use DateTime;

/**
 * Returns open and recent incidents affecting the employee. A tenant whose employee is not configured reports availability "unavailable" with an empty list.
*/
class IncidentsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Cursor")
     * @var string|null $cursor 
    */
    public ?string $cursor = null;
    
    /**
     * @QueryParameter("From")
     * @var DateTime|null $from 
    */
    public ?DateTime $from = null;
    
    /**
     * @QueryParameter("Limit")
     * @var int|null $limit 
    */
    public ?int $limit = null;
    
    /**
     * @QueryParameter("Status")
     * @var string|null $status 
    */
    public ?string $status = null;
    
    /**
     * @QueryParameter("To")
     * @var DateTime|null $to 
    */
    public ?DateTime $to = null;
    
    /**
     * Instantiates a new IncidentsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $cursor 
     * @param DateTime|null $from 
     * @param int|null $limit 
     * @param string|null $status 
     * @param DateTime|null $to 
    */
    public function __construct(?string $cursor = null, ?DateTime $from = null, ?int $limit = null, ?string $status = null, ?DateTime $to = null) {
        $this->cursor = $cursor;
        $this->from = $from;
        $this->limit = $limit;
        $this->status = $status;
        $this->to = $to;
    }

}
