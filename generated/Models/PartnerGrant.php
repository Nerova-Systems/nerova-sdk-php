<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PartnerGrant extends Enum {
    public const READ_SERVICES = "ReadServices";
    public const READ_STAFF = "ReadStaff";
    public const READ_SCHEDULES = "ReadSchedules";
    public const READ_CLIENTS = "ReadClients";
    public const READ_AVAILABILITY = "ReadAvailability";
    public const READ_APPOINTMENTS = "ReadAppointments";
    public const CREATE_APPOINTMENTS = "CreateAppointments";
    public const RESCHEDULE_APPOINTMENTS = "RescheduleAppointments";
    public const CANCEL_APPOINTMENTS = "CancelAppointments";
    public const MERCHANT_PROVISION = "merchant:provision";
    public const MERCHANT_READ = "merchant:read";
    public const EMPLOYEE_READ = "employee:read";
    public const EMPLOYEE_MANAGE = "employee:manage";
    public const CONVERSATION_READ = "conversation:read";
    public const CONVERSATION_WRITE = "conversation:write";
    public const WORK_READ = "work:read";
    public const RECEIPT_READ = "receipt:read";
    public const MEMORY_READ = "memory:read";
    public const MEMORY_WRITE = "memory:write";
    public const MANDATE_READ = "mandate:read";
    public const MANDATE_WRITE = "mandate:write";
    public const PERFORMANCE_READ = "performance:read";
    public const CAPABILITY_READ = "capability:read";
    public const CHANNEL_MANAGE = "channel:manage";
    public const INCIDENT_READ = "incident:read";
    public const INCIDENT_MANAGE = "incident:manage";
    public const WEBHOOK_MANAGE = "webhook:manage";
    public const USAGE_READ = "usage:read";
    public const NOTIFICATION_SEND = "notification:send";
    public const TENANTS_CREATE = "tenants:create";
    public const GRANTS_MANAGE = "grants:manage";
    public const VOICE_BRIDGE = "voice:bridge";
}
