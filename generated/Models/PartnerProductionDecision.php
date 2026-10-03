<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerProductionDecision extends Enum {
    public const ALLOW = "Allow";
    public const DENY = "Deny";
    public const UNAVAILABLE = "Unavailable";
}
