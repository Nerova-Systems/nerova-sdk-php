<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProviderConformanceCheckStatus extends Enum {
    public const PASSED = "Passed";
    public const FAILED = "Failed";
    public const SKIPPED = "Skipped";
    public const EXCLUDED = "Excluded";
}
