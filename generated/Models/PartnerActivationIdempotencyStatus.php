<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationIdempotencyStatus extends Enum {
    public const APPLIED = "Applied";
    public const REPLAYED = "Replayed";
}
