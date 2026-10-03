<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProviderConnectionCertificationState extends Enum {
    public const UNVERIFIED = "Unverified";
    public const CERTIFIED = "Certified";
    public const SUSPENDED = "Suspended";
}
