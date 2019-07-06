<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'measurement', 'category'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::Class)
            ->withPivot('quantity');
    }
}
