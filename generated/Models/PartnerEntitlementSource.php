<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerEntitlementSource extends Enum {
    public const CURRENT = "Current";
    public const LAST_KNOWN_GOOD = "LastKnownGood";
    public const NONE = "None";
}
