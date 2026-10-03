<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalBookingEnvironment extends Enum {
    public const SANDBOX = "Sandbox";
    public const PRODUCTION = "Production";
}
