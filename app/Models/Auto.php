<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'autos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'car_id', 'model_id', 'last_search_time', 'views'
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}