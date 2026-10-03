<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalBookingProvider extends Enum {
    public const SALON_BRIDGE = "SalonBridge";
    public const PROVIDER_API_V1 = "ProviderApiV1";
}
