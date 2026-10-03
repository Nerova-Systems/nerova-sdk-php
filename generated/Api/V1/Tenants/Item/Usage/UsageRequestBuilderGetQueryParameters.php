<?php

namespace Nerova\Sdk\Api\V1\Tenants\Item\Usage;

use DateTime;

/**
 * Returns the billable-job meter for the tenant: jobs consumed, adjustments, allowance remaining, and any overage.
*/
class UsageRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("IncludedAllowance")
     * @var int|null $includedAllowance 
    */
    public ?int $includedAllowance = null;
    
    /**
     * @QueryParameter("PeriodEnd")
     * @var DateTime|null $periodEnd 
    */
    public ?DateTime $periodEnd = null;
    
    /**
     * @QueryParameter("PeriodStart")
     * @var DateTime|null $periodStart 
    */
    public ?DateTime $periodStart = null;
    
    /**
     * Instantiates a new UsageRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $includedAllowance 
     * @param DateTime|null $periodEnd 
     * @param DateTime|null $periodStart 
    */
    public function __construct(?int $includedAllowance = null, ?DateTime $periodEnd = null, ?DateTime $periodStart = null) {
        $this->includedAllowance = $includedAllowance;
        $this->periodEnd = $periodEnd;
        $this->periodStart = $periodStart;
    }

}
