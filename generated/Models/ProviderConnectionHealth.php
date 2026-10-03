<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProviderConnectionHealth extends Enum {
    public const UNKNOWN = "Unknown";
    public const HEALTHY = "Healthy";
    public const DEGRADED = "Degraded";
    public const UNAVAILABLE = "Unavailable";
}
