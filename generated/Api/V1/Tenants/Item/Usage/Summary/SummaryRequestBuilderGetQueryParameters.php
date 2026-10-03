<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Usage\Summary;

/**
 * Returns the tenant's rebilling counters for one UTC calendar month (default: the current month): tokens consumed (voice surcharge included), recorded voice seconds, bookings created (Nerova scheduler bookings plus appointments the AI created on your platform), bookings cancelled by the AI, and AI conversations started. Counts only - the wholesale rate lives on the organization invoice and retail pricing is yours.
*/
class SummaryRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Month")
     * @var int|null $month 
    */
    public ?int $month = null;
    
    /**
     * @QueryParameter("Year")
     * @var int|null $year 
    */
    public ?int $year = null;
    
    /**
     * Instantiates a new SummaryRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $month 
     * @param int|null $year 
    */
    public function __construct(?int $month = null, ?int $year = null) {
        $this->month = $month;
        $this->year = $year;
    }

}
