<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerActivationDuty extends Enum {
    public const CLIENT_REPLIES = "ClientReplies";
    public const BOOKINGS_AND_RESCHEDULES = "BookingsAndReschedules";
    public const PAYMENT_LINKS = "PaymentLinks";
    public const REFUNDS_AND_FEE_WAIVERS = "RefundsAndFeeWaivers";
}
