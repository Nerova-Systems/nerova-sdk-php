<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProviderConnectionState extends Enum {
    public const PENDING_VALIDATION = "PendingValidation";
    public const ACTIVE = "Active";
    public const INVALID = "Invalid";
    public const DISABLED = "Disabled";
    public const REVOKED = "Revoked";
}
