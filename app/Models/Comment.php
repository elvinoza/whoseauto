<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'auto_id', 'comment'
    ];

    /**
     * Many to one relation
     *
     * @return Illuminate\Database\Eloquent\Relations\belongTo
     */
    public function auto()
    {
        return $this->belongsTo('App\Models\Auto', 'auto_id');
    }
}