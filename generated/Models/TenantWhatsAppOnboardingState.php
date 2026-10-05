<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TenantWhatsAppOnboardingState extends Enum {
    public const NOT_CONNECTED = "NotConnected";
    public const PENDING = "Pending";
    public const CONNECTED = "Connected";
}
