<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'user_id'];



    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // to check if user is logged in
        if(auth()->check())
        {
            //global scope
            static::addGlobalScope('by_user', function (Builder $builder) {
                $builder->where('user_id', auth()->id());
            });
        }

    }
}
