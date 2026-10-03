<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Performance;

use DateTime;

/**
 * Returns evidence-backed performance metrics for a UTC window of up to 31 days. Only metrics with recorded evidence appear.
*/
class PerformanceRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("From")
     * @var DateTime|null $from 
    */
    public ?DateTime $from = null;
    
    /**
     * @QueryParameter("To")
     * @var DateTime|null $to 
    */
    public ?DateTime $to = null;
    
    /**
     * Instantiates a new PerformanceRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $from 
     * @param DateTime|null $to 
    */
    public function __construct(?DateTime $from = null, ?DateTime $to = null) {
        $this->from = $from;
        $this->to = $to;
    }

}
