<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Schema::class);
    }

    public function workout(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Workout::class, "schema_workout", "schema_id", "workout_id");
    }

}
