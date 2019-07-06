<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'desc', 'instruction', 'time'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::Class)
            ->withPivot('quantity');
    }
}