<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationConsentRequirement extends Enum {
    public const DATA_PROCESSING = "DataProcessing";
    public const RETENTION_ACKNOWLEDGEMENT = "RetentionAcknowledgement";
}
