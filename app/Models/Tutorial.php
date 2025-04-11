<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tutorial extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class);
    }

    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
