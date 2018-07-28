<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $primaryKey = 'player_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender'
    ];

    public function user()
    {
    	return $this->belongsTo(user:class);
    }

}
