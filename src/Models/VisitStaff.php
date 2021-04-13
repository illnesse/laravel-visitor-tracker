<?php

namespace Voerro\Laravel\VisitorTracker\Models;

class VisitStaff extends Visit
{
    protected $table = 'visitortracker_visits_staff';

    protected $guarded = [];

    protected $casts = [
        'is_ajax' => 'boolean',
        'is_login_attempt' => 'boolean',
        'is_bot' => 'boolean',
        'is_mobile' => 'boolean',
    ];
}
