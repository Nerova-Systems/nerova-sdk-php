<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BillableJobMeterAvailability extends Enum {
    public const AVAILABLE = "Available";
    public const DEGRADED = "Degraded";
    public const UNAVAILABLE = "Unavailable";
}
