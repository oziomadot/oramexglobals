<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function training()
    {
        return $this->hasMany(Training::class);
    }
}
