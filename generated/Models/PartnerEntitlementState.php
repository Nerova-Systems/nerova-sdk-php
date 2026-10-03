<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerEntitlementState extends Enum {
    public const ACTIVE = "active";
    public const CANCEL_SCHEDULED = "cancel_scheduled";
    public const GRACE = "grace";
    public const PENDING = "pending";
    public const NONE = "none";
    public const SUSPENDED = "suspended";
    public const UNAVAILABLE = "unavailable";
}
