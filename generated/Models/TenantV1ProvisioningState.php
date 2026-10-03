<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TenantV1ProvisioningState extends Enum {
    public const ACCOUNT_TENANT_PENDING = "AccountTenantPending";
    public const MACHINE_GRANT_PENDING = "MachineGrantPending";
    public const READY = "Ready";
    public const FAILED = "Failed";
}
