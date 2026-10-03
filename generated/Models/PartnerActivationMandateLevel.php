<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationMandateLevel extends Enum {
    public const NEVER = "Never";
    public const ASK_FIRST = "AskFirst";
    public const DO_IT_TELL_ME = "DoItTellMe";
    public const JUST_DO_IT = "JustDoIt";
}
