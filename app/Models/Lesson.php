<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class);
    }

    public function enrolled(): BelongsTo{
        return $this->belongsTo(Enrolled::class);
    }


}
