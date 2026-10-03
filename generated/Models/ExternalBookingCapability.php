<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalBookingCapability extends Enum {
    public const READ_SERVICES = "ReadServices";
    public const READ_STAFF = "ReadStaff";
    public const READ_SCHEDULES = "ReadSchedules";
    public const READ_CLIENTS = "ReadClients";
    public const READ_AVAILABILITY = "ReadAvailability";
    public const READ_APPOINTMENTS = "ReadAppointments";
    public const CREATE_APPOINTMENTS = "CreateAppointments";
    public const RESCHEDULE_APPOINTMENTS = "RescheduleAppointments";
    public const CANCEL_APPOINTMENTS = "CancelAppointments";
    public const CREATE_CLIENTS = "CreateClients";
    public const READ_SALES = "ReadSales";
    public const READ_LOYALTY = "ReadLoyalty";
    public const REDEEM_LOYALTY = "RedeemLoyalty";
    public const READ_GIFT_CARDS = "ReadGiftCards";
    public const ISSUE_GIFT_CARDS = "IssueGiftCards";
    public const READ_SUBJECTS = "ReadSubjects";
    public const CREATE_SUBJECTS = "CreateSubjects";
    public const INTAKE_FORMS = "IntakeForms";
}
