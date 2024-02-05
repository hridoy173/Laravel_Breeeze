<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Department;
use App\Models\Hostal;



class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relation with department
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

// relation with hostal

    public function hostal(): BelongsTo
    {
        return $this->belongsTo(Hostal::class);
    }

}
