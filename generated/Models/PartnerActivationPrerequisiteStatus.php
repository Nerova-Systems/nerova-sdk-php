<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationPrerequisiteStatus extends Enum {
    public const MISSING = "Missing";
    public const READY = "Ready";
    public const UNAVAILABLE = "Unavailable";
    public const MISMATCH = "Mismatch";
}
