<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationState extends Enum {
    public const DRAFT = "Draft";
    public const ACTIVE = "Active";
    public const PAUSED = "Paused";
    public const SUSPENDED = "Suspended";
    public const DEGRADED = "Degraded";
    public const DEACTIVATED = "Deactivated";
}
