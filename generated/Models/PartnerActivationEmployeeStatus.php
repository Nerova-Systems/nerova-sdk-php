<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationEmployeeStatus extends Enum {
    public const NOT_CONFIGURED = "NotConfigured";
    public const READY = "Ready";
    public const ACTIVE = "Active";
    public const PAUSED = "Paused";
    public const SUSPENDED = "Suspended";
    public const DEGRADED = "Degraded";
    public const DEACTIVATED = "Deactivated";
}
