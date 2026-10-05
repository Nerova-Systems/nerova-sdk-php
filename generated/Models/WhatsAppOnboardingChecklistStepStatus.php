<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WhatsAppOnboardingChecklistStepStatus extends Enum {
    public const COMPLETE = "Complete";
    public const CURRENT = "Current";
    public const UPCOMING = "Upcoming";
}
