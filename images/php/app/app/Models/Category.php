<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Category extends Model 
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 
    ];

    public $timestamps = false;


    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

}