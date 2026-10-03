<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationDutyRequirement extends Enum {
    public const MANDATORY = "Mandatory";
    public const OPTIONAL = "Optional";
    public const FORBIDDEN = "Forbidden";
}
