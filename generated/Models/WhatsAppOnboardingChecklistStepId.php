<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WhatsAppOnboardingChecklistStepId extends Enum {
    public const CONNECT = "Connect";
    public const VERIFY_BUSINESS = "VerifyBusiness";
    public const COMPLETE_PROFILE = "CompleteProfile";
    public const PUBLISH_FIRST_FLOW = "PublishFirstFlow";
    public const SEND_TEST_MESSAGE = "SendTestMessage";
}
