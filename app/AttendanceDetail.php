<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
