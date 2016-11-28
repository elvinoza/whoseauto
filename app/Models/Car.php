<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function models()
    {
        return $this->hasMany('App\Models\CarModel', 'id');
    }
}