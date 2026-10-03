<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TenantV1LifecycleState extends Enum {
    public const ACTIVE = "Active";
    public const SUSPENDED = "Suspended";
    public const ARCHIVED = "Archived";
}
