<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Work;

use DateTime;

/**
 * Returns a cursor-paginated page of jobs and receipts merged into one ledger, newest first.
*/
class WorkRequestBuilderGetQueryParameters 
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
     * @QueryParameter("To")
     * @var DateTime|null $to 
    */
    public ?DateTime $to = null;
    
    /**
     * Instantiates a new WorkRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $cursor 
     * @param DateTime|null $from 
     * @param int|null $limit 
     * @param DateTime|null $to 
    */
    public function __construct(?string $cursor = null, ?DateTime $from = null, ?int $limit = null, ?DateTime $to = null) {
        $this->cursor = $cursor;
        $this->from = $from;
        $this->limit = $limit;
        $this->to = $to;
    }

}
