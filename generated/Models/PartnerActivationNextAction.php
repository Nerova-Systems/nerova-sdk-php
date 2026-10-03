<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationNextAction extends Enum {
    public const PROVISION = "Provision";
    public const UPDATE_PROVISIONING = "UpdateProvisioning";
    public const CONFIRM_IDENTITY = "ConfirmIdentity";
    public const CONNECT_CHANNEL = "ConnectChannel";
    public const CONFIGURE_MANDATE = "ConfigureMandate";
    public const CAPTURE_CONSENT = "CaptureConsent";
    public const PREVIEW = "Preview";
    public const ACTIVATE = "Activate";
    public const PAUSE = "Pause";
    public const SUSPEND = "Suspend";
    public const RECONCILE = "Reconcile";
    public const DEACTIVATE = "Deactivate";
}
