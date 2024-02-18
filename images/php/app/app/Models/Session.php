<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Session extends Model 
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'points'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exercises():BelongsToMany
    {
        return $this->belongsToMany(Exercise::class);
    }
}
