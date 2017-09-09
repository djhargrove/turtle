<?php

namespace Kjdion84\Turtle\Models;

use Illuminate\Database\Eloquent\Model;
use Kjdion84\Turtle\Traits\InTime;

class Role extends Model
{
    use InTime;

    protected $fillable = ['name'];

    // permissions relationship
    public function permissions()
    {
        return $this->belongsToMany(config('turtle.models.permission'));
    }
}