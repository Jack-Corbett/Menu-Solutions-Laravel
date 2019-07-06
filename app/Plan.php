<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['start_date', 'end_date'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)
            ->withPivot('date', 'number_eating');
    }
}
