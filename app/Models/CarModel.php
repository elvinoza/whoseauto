<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'models';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'car_id'
    ];

    /**
     * Many to one relation
     *
     * @return Illuminate\Database\Eloquent\Relations\belongTo
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car', 'car_id');
    }
}