<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Title extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tutorial(): HasMany
    {
        return $this->hasMany(Tutorial::class);
    }
}
