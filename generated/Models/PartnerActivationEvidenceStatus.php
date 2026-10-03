<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationEvidenceStatus extends Enum {
    public const SUCCEEDED = "Succeeded";
    public const FAILED = "Failed";
    public const NOT_ATTEMPTED = "NotAttempted";
    public const SIMULATED = "Simulated";
}
